<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function item() {

        $items = Item::orderBy('id')
                ->with('offices')
                ->get();

        return inertia("Items",[
            'items' => $items
        ]);
    }
}
