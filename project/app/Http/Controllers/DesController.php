<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Service\Destination\DestinationService;

class DesController extends Controller
{
    protected $desService;


    public function __construct(DestinationService $desService)
    {
        $this->desService = $desService;
    }

    public function index(Request $request, $id, $slug = '') {
        $destination = $this->desService->getId($id);
        // dd($destination);

        $places = $this->desService->getPlace($destination)->get();

        return view('destination', [
            'title' => $destination->name,
            'places' => $places,
            'destination' => $destination,
            // Thêm một thuộc tính destination để lấy ra ảnh bìa của destination
            'destinations' => $this->desService->show()
        ]);
    }
}
