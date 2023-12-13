<?php

namespace App\Http\Controllers\Destination;

use App\Http\Controllers\Controller;
use App\Http\Service\Destination\DestinationService;
use Illuminate\Http\Request;

class DestinationPageController extends Controller
{

    protected $destination;
    public function __construct(DestinationService $destination) {
        $this->destination = $destination;
    }

    public function index() {
        return view('destination.destination', [
            'title' => 'All Destinations', 
            'destinations' => $this->destination->show()
        ]);
    }
}
