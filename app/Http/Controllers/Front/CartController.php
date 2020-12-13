<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\FrontController;
use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;
use App\Models\Spectacle;
use App\Models\Row;
use App\Models\ColorSchema;
use App\Http\Requests\Front\Cart\StoreOrderRequest;
use App\Models\Order;
use \Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use App\Services\EmailService;

class CartController extends FrontController
{

    /**
     * @return Application|Factory|View
     */
    public function show()
    {
        $spectacles = $this->getCartData();
        $total = \Cart::getTotal();

        return view('front.cart.show', compact('spectacles', 'total'));
    }

    /**
     * @return Application|Factory|View
     */
    public function buy()
    {
        $spectacles = $this->getCartData();
        $total = \Cart::getTotal();

        return view('front.cart.buy', compact('spectacles', 'total'));
    }

    /**
     * @param Request $request
     *
     * @return Application|Factory|View
     */
    public function success(Request $request)
    {
        return view('front.cart.success');
    }

    /**
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function deleteAll(Request $request)
    {
        \Cart::clear();

        return back();
    }

    /**
     * @param Request $request
     * @param string  $uid
     *
     * @return RedirectResponse
     */
    public function delete(Request $request, string $uid)
    {
        \Cart::remove($uid);

        return back();
    }

    /**
     * @param StoreOrderRequest $request
     * @param EmailService      $emailService
     *
     * @return Application|Factory|View
     */
    public function order(StoreOrderRequest $request, EmailService $emailService)
    {
        $spectacles = $this->getCartData();

        $orderData = $request->validated();
        $orderData['uid'] = uniqid();
        $orderData['total'] = \Cart::getTotal();

        /** @var Order $order */
        $order = Order::query()->create($orderData);
        $order->spectacles()->sync(array_keys($spectacles));

        $mailData = [];
        foreach ($spectacles as $spectacleData) {
            /** @var Spectacle $spectacle */
            $spectacle = $spectacleData['model'];
            foreach ($spectacleData['places'] as $place) {
                $insertData = [
                    'row_id' => $place['row_id'],
                    'col_id' => $place['col_id'],
                    'price' => $place['price'],
                    'place' => $place['place'],
                    'row' => $place['row'],
                    'status' => 'reserved'
                ];
                $mailData[$spectacle->id]['items'][] = $insertData;
                $mailData[$spectacle->id]['model'] = $spectacle;
                $spectacle->tickets()->create($insertData);

                \Cart::remove($place['col_id']);
            }
        }

        $emailService->sendTicketsToUser(
            $mailData,
            $request->first_name . ' ' . $request->last_name,
            $request->email
        );

        return view('front.cart.success');
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function toggle(Request $request)
    {
        $spectacle = Spectacle::query()->find($request->spectacle_id);
        $row = Row::query()->findOrFail($request->row_id);
        $uid = null;

        $price = ColorSchema::query()
            ->where('color_id', $row->color_id)
            ->where('schema_id', $spectacle->schema->id)
            ->firstOrFail()
            ->price;

        if (! $request->u_id) {
            $uid = $this->create($price, $request, $spectacle->name);

        } else {
            $cartItems = \Cart::getContent()->toArray();

            if (isset($cartItems[$request->u_id])) {
                \Cart::remove($request->u_id);

            } else {
                $uid = $this->create($price, $request, $spectacle->name);
            }
        }

        return response()->json([
            'success' => true,
            'u_id' => $uid,
            'count' => \Cart::getTotalQuantity(),
            'total' => \Cart::getTotal(),
            'totals' => $this->getGroupTotals()
        ]);
    }

    /**
     * @return array
     */
    public function getGroupTotals() : array
    {
        $items = \Cart::getContent();
        $totals = [];
        foreach ($items->toArray() as $key => $value) {
            $price = $value['price'];

            if (! isset($totals[$price])) {
                $totals[$price] = 0;
            }

            $totals[$price] += $value['quantity'];
        }

        return $totals;
    }

    /**
     * @param        $price
     * @param        $request
     * @param string $spectacleName
     *
     * @return int
     */
    private function create($price, $request, string $spectacleName = '') : int
    {
        $uid = $request->col_id;

        \Cart::add([
            'id' => $uid,
            'name' => $spectacleName,
            'price' => $price,
            'quantity' => 1,
            'attributes' => [
                'spectacle_id' => $request->spectacle_id,
                'row_id' => $request->row_id,
                'col_id' => $request->col_id,
                'seat' => $request->seat,
                'row' => $request->row,
            ],
        ]);

        return $uid;
    }

    /**
     * @return array
     */
    private function getCartData() : array
    {
        $items = \Cart::getContent();

        $spectacles = [];
        foreach ($items->toArray() as $data) {
            $spectacleId = $data['attributes']['spectacle_id'];

            if (! isset($spectacles[$spectacleId])) {
                $spectacles[$spectacleId] = [];
                $spectacles[$spectacleId]['model'] = Spectacle::query()->find($spectacleId);
            }

            $spectacles[$spectacleId]['places'][] = [
                'row_id' => $data['attributes']['row_id'],
                'col_id' => $data['attributes']['col_id'],
                'place' => $data['attributes']['seat'],
                'price' => $data['price'],
                'row' => $data['attributes']['row'],
            ];
        }

        return $spectacles;
    }

}
