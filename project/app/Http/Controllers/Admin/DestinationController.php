<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Destination\CreateFormRequest;
use Illuminate\Http\Request;
use App\Http\Service\Destination\DestinationService;
use App\Models;
use App\Models\Destination;
use Illuminate\Support\Facades\Redis;

class DestinationController extends Controller
{
    protected $destinationService;

    public function __construct(DestinationService $destinationService)
    {
        $this->destinationService = $destinationService;
    }

    public function create() {
        return view('admin.destination.add', [
            'title' => 'Trang thêm địa điểm',
            'destinations' => $this->destinationService->getParent()
        ]);
    }

    public function travel(CreateFormRequest $request) {
        // dd($request->input());

        $result = $this->destinationService->create($request);
        if ($result) {
            return redirect('/admin/destinations/list');
        }
        return redirect()->back();
    }

    public function index() {
        return view('admin.destination.list', [
            'title' => 'Danh sách các địa điểm mới nhất',
            'destinations' => $this->destinationService->getAll()
        ]);
    }


    public function destroy(Request $request): \Illuminate\Http\JsonResponse {
        $result = $this->destinationService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công địa điểm'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }   

    # Kiem tra id trong data co ton tai hay khong
    public function show(Destination $destination) {
        return view('admin.destination.edit', [
            'title' => 'Chỉnh sửa địa điểm: '.$destination->name,
            'destination' => $destination,
            'destinations' => $this->destinationService->getParent()
        ]);
    }

    # Update data
    public function update(Destination $destination, CreateFormRequest $request) {
        $result = $this->destinationService->update($request, $destination);
        if ($result) {
            return redirect('/admin/destinations/list');
        }
        return redirect()->back();
    }
}
