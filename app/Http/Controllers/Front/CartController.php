<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\FrontController;
use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;
use App\Models\Spectacle;
use App\Models\Row;
use App\Models\ColorSchema;

class CartController extends FrontController
{

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
            $uid = $this->create($price, $request);

        } else {
            $cartItems = \Cart::getContent()->toArray();

            if (isset($cartItems[$request->u_id])) {
                \Cart::remove($request->u_id);

            } else {
                $uid = $this->create($price, $request);
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
     * @param $price
     * @param $request
     *
     * @return int
     */
    private function create($price, $request) : int
    {
        $uid = $request->col_id;

        \Cart::add([
            'id' => $uid,
            'name' => ! empty($spectacle->name) ? $spectacle->name : 'Test' ?? 'Test',
            'price' => $price,
            'quantity' => 1,
            'attributes' => [
                'spectacle_id' => $request->spectacle_id,
                'row_id' => $request->row_id,
                'col_id' => $request->col_id,
            ],
        ]);

        return $uid;
    }

    public function show()
    {
        $items = \Cart::getContent();

        dd($items);
    }

    public function getGroupTotals()
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

    public function deleteAll()
    {
        $items = \Cart::getContent();

        foreach ($items->toArray() as $key => $value)
        {
            \Cart::remove("$key");
        }
    }

}
