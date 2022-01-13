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

    public function dashboard(Request $request)
    {
        $payment = payment::all();
        return view('dashboard.payment', ['payment'=>$payment]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'payment_method' => 'required',
            'payment_type' => 'required',
            'payment_desc' => 'required',
            'admin_fee' => 'required'
        ]);

        $input['payment_method'] = $request->payment_method;
        $input['payment_type'] = $request->payment_type;
        $input['payment_desc'] = $request->payment_desc;
        $input['admin_fee'] = $request->admin_fee;
        $newPayment = payment::create($input);
        return back()->with('success', 'Shipping method added');

    }

    public function toUpdate($id)
    {
        $payment = payment::findOrFail($id);
        return view('dashboard.updatePayment', ['payment'=> $payment]);
    }

    public function dataUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'payment_method' => 'required',
            'payment_type' => 'required',
            'payment_desc' => 'required',
            'admin_fee' => 'required'
        ]);

        $input = payment::findOrFail($id)->update([
            'payment_method' => $request->payment_method,
            'payment_type' => $request->payment_type,
            'payment_desc' => $request->payment_desc,
            'admin_fee' => $request->admin_fee,
        ]);
        
        return redirect()->intended('/dashboard-shipping')->with('success', 'Shipping updated');

    }

    public function destroy($id)
    {
        $thisDetail = payment::findOrFail($id);
        if($thisDetail->delete())
        {
            return back()->with('success', 'Item deleted');
        }

        else
        {
            return back()->with('error', 'Item not deleted');
        }
    }


    public function update(Request $request, $id)
    {
        $newpayment = payment::findOrFail($id);
        $newpayment->update(['status'=>'selected']);
        payment::where('id', '!=', $newpayment->id)->update(['status'=>'no']);
        return redirect('/checkout');
    }
}
