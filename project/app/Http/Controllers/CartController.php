<?php

namespace App\Http\Controllers;

use App\Http\Service\CartSerVice;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cartservice;

    public function __construct(CartSerVice $cartSerVice)
    {
        $this->cartservice = $cartSerVice;
    }

    public function addcart(Request $request) {
        // dd($request->input());
        $this->cartservice->addCart($request);
        return redirect()->back();
    }
}
