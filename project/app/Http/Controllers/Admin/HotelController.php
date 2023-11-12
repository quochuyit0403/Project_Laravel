<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Hotel\HotelRequest;
use Illuminate\Http\Request;
use App\Http\Service\Hotel\HotelService;
use App\Models\Hotel;

class HotelController extends Controller
{
    protected $hotel;

    public function __construct(HotelService $hotel)
    {
        $this->hotel = $hotel;
    }

    public function create() {
        return view('admin.hotel.add', [
            'title' => 'Thêm khách sạn mới',
            'places' => $this->hotel->getPlace()
        ]);
    }

    public function travel(HotelRequest $request) {
        $result = $this->hotel->insert($request);
        if ($result) {
            return redirect('/admin/hotels/list');
        }
        return redirect()->back();
    }

    public function index() {
        return view('admin.hotel.list', [
            'title' => 'Danh sách tất cả khách sạn',
            'hotels' => $this->hotel->get()
        ]);
    }

    public function show(Hotel $hotel) {
        return view('admin.hotel.edit', [
            'title' => 'Chỉnh sửa thông tin khách sạn',
            'hotel' => $hotel,
            'places' => $this->hotel->getPlace()
        ]);
    }


    public function update(Request $request, Hotel $hotel) {
        $result = $this->hotel->update($request, $hotel);
        if ($result) {
            return redirect('/admin/hotels/list');
        }
        return redirect()->back();
    }


    public function destroy(Request $request) {
        $result = $this->hotel->delete($request);

        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công khách sạn'
            ]);
        }

        return response()->json(['error' => true]);
    }
}
