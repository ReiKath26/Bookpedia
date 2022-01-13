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

    public function dashboard(Request $request)
    {
        $shipping = shipping::all();
        return view('dashboard.shipping', ['shipping'=>$shipping]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'shipment_company' => 'required',
            'shipment_type' => 'required',
            'shipment_price' => 'required',
            'min_shipment_duration' => 'required',
            'max_shipment_duration' => 'required',
        ]);

        $input['shipment_company'] = $request->shipment_company;
        $input['shipment_type'] = $request->shipment_type;
        $input['shipment_price'] = $request->shipment_price;
        $input['min_shipment_duration'] = $request->min_shipment_duration;
        $input['max_shipment_duration'] =$request->max_shipment_duration;
        $newShipping = shipping::create($input);
        return back()->with('success', 'Shipping method added');

    }

    public function toUpdate($id)
    {
        $shipping = shipping::findOrFail($id);
        return view('dashboard.updateShip', ['shipping'=> $shipping]);
    }

    public function dataUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'shipment_company' => 'required',
            'shipment_type' => 'required',
            'shipment_price' => 'required',
            'min_shipment_duration' => 'required',
            'max_shipment_duration' => 'required',
        ]);

        $input = shipping::findOrFail($id)->update([
            'shipment_company' => $request->shipment_company,
            'shipment_type' => $request->shipment_type,
            'shipment_price' => $request->shipment_price,
            'min_shipment_duration' => $request->min_shipment_duration,
            'max_shipment_duration' => $request->max_shipment_duration,
        ]);
        
        return redirect()->intended('/dashboard-shipping')->with('success', 'Shipping updated');

    }

    public function destroy($id)
    {
        $thisDetail = shipping::findOrFail($id);
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
        $shippingmethod = shipping::findOrFail($id);
        $shippingmethod->update(['status'=>'selected']);
        shipping::where('id', '!=', $shippingmethod->id)->update(['status'=>'no']);
        return view('checkout');
    }
}
