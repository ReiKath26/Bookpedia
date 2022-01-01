<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload()
    {
        return view('proof');
    }

    public function process(Request $request)
    {
        $this->validate($request, [
            'file' => 'required'
        ]);

        $file = $request->file('file');

		$upload_address = 'data_file';

		$file->move($upload_address,$file->getClientOriginalName());
        return redirect()->intended('/')->with('success', 'Order paid successfully');

    }
}
