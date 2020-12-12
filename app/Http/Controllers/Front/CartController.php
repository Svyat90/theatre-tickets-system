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
    public function add(Request $request)
    {
        $spectacle = Spectacle::query()->find($request->spectacle_id);
        $row = Row::query()->findOrFail($request->row_id);

        $price = ColorSchema::query()
            ->where('color_id', $row->color_id)
            ->where('schema_id', $spectacle->schema->id)
            ->firstOrFail()
            ->price;

        // ToDo check on exists

        \Cart::add([
            'id' => $id = rand(1, 1000000),
            'name' => ! empty($spectacle->name) ? $spectacle->name : 'Test' ?? 'Test',
            'price' => $price,
            'quantity' => 1,
            'attributes' => [
                'spectacle_id' => $request->spectacle_id,
                'row_id' => $request->row_id,
                'col_id' => $request->col_id,
            ],
        ]);

        return response()->json([
            'success' => true,
            'count' => \Cart::getTotalQuantity(),
            'total' => \Cart::getTotal(),
        ]);
    }

    public function show()
    {
        $items = \Cart::getContent();

        dd($items);
    }
}
