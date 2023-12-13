<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Service\Destination\DestinationService;
use App\Http\Service\Place\PlaceService;

class MainnController extends Controller
{
    protected $destination;
    protected $place;

    public function __construct(DestinationService $destination, PlaceService $place)
    {
        $this->destination = $destination;
        $this->place = $place;

    }

    public function index() {
        return view('main', [
            'title' => 'Da Nang Travel',
            'destinations' => $this->destination->show()
        ]);
    }
}
