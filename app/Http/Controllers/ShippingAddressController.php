<?php

namespace App\Http\Controllers;

use App\Models\shipping_address;
use Illuminate\Http\Request;

class ShippingAddressController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $newshippingaddress = shipping_address::where('user', $user->id)->paginate(4);
        return view('address', ['address'=> $newshippingaddress]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'receiver_name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'province' => 'required',
            'city' => 'required',
            'postcode' => 'required'
        ]);

        $user = $request->user();
        $input = $request->all();
        $input['user'] = $user->id;
        $input['status'] = 'selected';
        $newshippingaddress = shipping_address::create($input);
        shipping_address::where('id', '!=', $newshippingaddress->id)->update(['status'=>'not']);
        return back()->with('success', 'Shipping Address added');

    }

    public function update(Request $request, $id)
    {
        $newshippingaddress = shipping_address::findOrFail($id);
        $newshippingaddress->update(['status'=>'selected']);
        shipping_address::where('id', '!=', $newshippingaddress->id)->update(['status'=>'not']);
        return redirect("/checkout");
    }
}
