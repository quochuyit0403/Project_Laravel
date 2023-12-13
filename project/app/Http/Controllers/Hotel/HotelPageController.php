<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use App\Http\Service\Hotel\HotelUserService;
use Illuminate\Http\Request;

class HotelPageController extends Controller
{

    protected $hotel;
    public function __construct(HotelUserService $hotel) {
        $this->hotel = $hotel;
    }

    public function index() {
        return view('hotel.hotel', [
            'title' => 'All Hotels', 
            'hotels' => $this->hotel->get()
        ]);
    }

    public function index_detail($id = '', $slug = '') {
        $hotel = $this->hotel->show($id);

        return view('hotel.hoteldetail', [
            'title' => $hotel->name,
            'hotel' => $hotel
        ]);
    }
}
