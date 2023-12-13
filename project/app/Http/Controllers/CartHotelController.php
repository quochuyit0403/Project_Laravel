<?php

namespace App\Http\Controllers;

use App\Http\Service\CartHotelService;
use Illuminate\Http\Request;

class CartHotelController extends Controller
{
    protected $carthotelservice;
    
    public function __construct(CartHotelService $cartHotelService)
    {
        $this->carthotelservice = $cartHotelService;
    }

    public function addcart(Request $request) {
        $this->carthotelservice->addCart($request);
        return redirect()->back();
    }
}
