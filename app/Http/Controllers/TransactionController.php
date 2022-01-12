<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\payment;
use App\Models\shipping;
use App\Models\shipping_address;
use App\Models\transaction_detail;
use App\Models\transaction_head;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $user = $request->user();
        $thisCart = cart::where('customer_id', $user->id)->where('status', 'active')->first();

        if($thisCart)
        {
            $thisShippingAddress = shipping_address::where('user', $user->id)
                                    ->where('status', 'selected')->first();
            $thisPaymentMethod = payment::where('status', 'selected')->first();
            $thisShipping = shipping::where('status', 'selected')->first();


            if($thisShippingAddress)
            {
                if($thisPaymentMethod)
                {
                    if($thisShipping)
                    {
                        $thisCart['status'] = 'done';
                        $total = $thisCart->total + $thisPaymentMethod->admin_fee + $thisShipping->shipment_price;
                        $input['user_id'] = $user->id;
                        $input['shipping_id'] = $thisShipping->id;
                        $input['payment_id'] = $thisPaymentMethod->id;
                        $input['shipping_address'] = $thisShippingAddress->id;
                        $input['total'] = $total;
                        $input['cart_id'] = $thisCart->id;
                        $order_head = transaction_head::create($input);
                        return redirect()->intended('/payment-proof')->with('success', 'Order awaiting payment');
                    }

                    else
                    {
                        return back()->with('error', 'Shipping method not selected');
                    }
                }

                else
                {
                    return back()->with('error', 'Payment method not selected');
                }
            }

            else
            {
                return back()->with('error', 'Shipping Address not selected');
            }
        }

        else
        {
            return abort('404');
        }
    }

    public function history()
    {
        $histories = transaction_head::where('user_id', Auth::user()->id)->get();
        return view('history', ['histories' => $histories]);
    }

    public function historyDetail($id)
    {
        $head = transaction_head::find($id);
        $details = transaction_detail::where('transaction_id', $id)->get();

        return view('historyDetail', ['head' => $head, 'details' => $details]);
    }
}
