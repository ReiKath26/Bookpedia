<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\cart_detail;
use App\Models\payment;
use App\Models\shipping;
use App\Models\shipping_address;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index(Request $request)
    {
        $user = $request->user();
        $thisCart = cart::where('customer_id', $user->id)->where('status', 'active')->first();

        
            return view('cart', ['thisCart'=>$thisCart]);
    }

    function empty($id)
    {
        $thisCart = cart::findOrFail($id);
        $thisCart->detail()->delete();
        return back()->with('success', 'Cart successfully emptied');
    }

    public function checkout(Request $request)
    {
        $user = $request->user();
        $thisCart = cart::where('customer_id', $user->id)->where('status', 'active')->first();
        $thisShippingAddress = shipping_address::where('user', $user->id)->where('status', 'selected')->first();
        $shippingMethods = shipping::where('status', 'selected')->first();
        $paymentMethod = payment::where('status', 'selected')->first();

        if($thisCart)
        {
                return view('checkout', ['thisCart'=>$thisCart, 'thisShippingAddress'=>$thisShippingAddress,
            'thisShipping'=>$shippingMethods, 'thisPayment'=>$paymentMethod]);
        }

        else
        {
            return abort('404');
        }
    }
}
