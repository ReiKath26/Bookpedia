<?php

namespace App\Http\Controllers;

use App\Models\shipping;

use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function index(Request $request)
    {
        $shipping = shipping::all();
        return view('shipping', ['shipping'=>$shipping]);
    }


    public function update(Request $request, $id)
    {
        $shippingmethod = shipping::findOrFail($id);
        $shippingmethod->update(['status'=>'selected']);
        shipping::where('id', '!=', $shippingmethod->id)->update(['status'=>'no']);
        return view('checkout');
    }
}
