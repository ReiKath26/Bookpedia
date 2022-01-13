<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\cart;
use App\Models\cart_detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request)
    {
        return abort('404');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'book_id' => 'required']);
        $user = $request->user();
        $book = book::findOrFail($request->book_id);

        $cart = cart::where('customer_id', $user->id)->where('status', 'active')->first();

        if($cart)
        {
            $thisCart = $cart;
        }

        else
        {
            $user_cart['customer_id'] = $user->id;
            $thisCart = cart::create($user_cart);
        }

        $is_detail = cart_detail::where('cart_id', $thisCart->id)->where('book_id', $book->id)->first();
        $qty = $request->qty;
        $price = $book->price;
        $subtotal = $qty * $price;

        if($is_detail)
        {
            $is_detail->updateDetail($is_detail, $qty, $price);
            $thisCart->updateTotal($thisCart, $subtotal);
            $book->stock -= $qty;
            $book->save();
        }

        else
        {
            $input = $request->all();
            $input['cart_id'] = $thisCart->id;
            $input['book_id'] = $book->id;
            $input['qty'] = $qty;
            $input['subtotal'] = $subtotal;

            $is_detail = cart_detail::create($input);
            $book->stock -= $qty;
            $book->save();
            $thisCart->updateTotal($thisCart, $subtotal);
        }

        return redirect()->route('cart.index')->with('success', 'Book added to cart');

    }

    public function update(Request $request, $id)
    {
        $thisDetail = cart_detail::findOrFail($id);
        $book = book::findOrFail($request->book_id);
        $param = $request->param;

        if($param == 'plus')
        {
            $qty = 1;
            $thisDetail->updateDetail($thisDetail, $qty, $thisDetail->price);
            $book->stock -= $qty;
            $thisDetail->cart->updateTotal($thisDetail->cart, $thisDetail->price);
            return back()->with('success', 'Item Updated');
        }

        if($param == 'min')
        {
            $qty = 1;
            $thisDetail->updateDetail($thisDetail, '-'.$qty, $thisDetail->price);
            $book->stock += $qty;
            $thisDetail->cart->updateTotal($thisDetail->cart, '-'.$thisDetail->price);
            return back()->with('success', 'Item Updated');
        }
    }

    public function destroy($id)
    {
        $thisDetail = cart_detail::findOrFail($id);
        $book = book::findOrFail($thisDetail->book_id);
        $thisDetail->cart->updateTotal($thisDetail->cart, '-'.$thisDetail->subtotal);
        if($thisDetail->delete())
        {
            $book->stock += $thisDetail->qty;
            $book->save();
            return back()->with('success', 'Item deleted');
        }

        else
        {
            return back()->with('error', 'Item not deleted');
        }
    }
}
