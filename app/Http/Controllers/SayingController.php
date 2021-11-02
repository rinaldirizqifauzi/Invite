<?php

namespace App\Http\Controllers;

use App\Models\Saying;
use Illuminate\Http\Request;

class SayingController extends Controller
{
    public function index(){
        $data = Saying::all();
        return view('home', compact('data'));
    }    

    public function tambahucapan(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:50',
            'ucapan' => 'required'
        ]);

        Saying::create($validatedData);
        return redirect()->back();
    }
}
