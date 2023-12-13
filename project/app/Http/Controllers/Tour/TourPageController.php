<?php

namespace App\Http\Controllers\Tour;

use App\Http\Controllers\Controller;
use App\Http\Service\Destination\DestinationService;
use App\Http\Service\Place\PlaceUserService;
use Illuminate\Http\Request;

class TourPageController extends Controller
{
    protected $place;
    public function __construct(PlaceUserService $place) {
        $this->place = $place;
    }

    public function index() {
        return view('tour.tour', [
            'title' => 'All Tours',
            'places' => $this->place->get()
        ]);
    }

    public function index_detail($id = '', $slug = '') {
        $place = $this->place->show($id);

        return view('tour.tourdetail', [
            'title' => $place->name,
            'place' => $place
        ]);
    }
}
