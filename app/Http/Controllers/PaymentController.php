<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $payment = payment::all();
        return view('payment', ['payment'=>$payment]);
    }


    public function update(Request $request, $id)
    {
        $newpayment = payment::findOrFail($id);
        $newpayment->update(['status'=>'selected']);
        payment::where('id', '!=', $newpayment->id)->update(['status'=>'no']);
        return view('checkout');
    }
}
