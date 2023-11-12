<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Service\Place\PlaceService;
use App\Http\Requests\Place\PlaceRequest;
use App\Models\Place;

class PlaceController extends Controller
{
    protected $placeService;


    public function __construct(PlaceService $placeService)
    {
        $this->placeService = $placeService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.place.list', [
            'title' => "Danh sách tất cả các Tour du lịch",
            'places' => $this->placeService->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.place.add', [
            'title' => 'Trang thêm tour du lịch',
            'destinations' => $this->placeService->getDestination()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function travel(PlaceRequest $request)
    {
        $result = $this->placeService->insert($request);
        if ($result) {
            return redirect('/admin/places/list');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Place $place) 
    {   
        return view('admin.place.edit', [
            'title' => "Chỉnh sửa Tour du lịch", 
            'place' => $place,
            'destinations' => $this->placeService->getDestination()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Place $place)
    {
        $result = $this->placeService->update($request, $place);

        if ($result) {
            return redirect('/admin/places/list');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $result = $this->placeService->delete($request);
        if($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công Tour du lịch'
            ]);
        }
        return response()->json(['error' => true]);
    }
}
