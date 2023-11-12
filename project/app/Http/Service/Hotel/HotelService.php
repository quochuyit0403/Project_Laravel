<?php
    namespace App\Http\Service\Hotel;

use App\Models\Hotel;
use App\Models\Place;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

    class HotelService {
        public function getPlace() {
            return Place::where('active', 1)->get();
        }

        protected function isValidPrice($request) {
            if ($request->input('price') != 0 && $request->input('price_sale') != 0 
            && $request->input('price_sale') >= $request->input('price')) {
                Session::flash('error',  'Giá giảm phải nhỏ hơn giá gốc');
                return false;
            }

            if($request->input('price_sale') != 0 && (int) $request->input('price') == 0) {
                Session::flash('error', 'Vui lòng nhập giá gốc!');
                return false;
            } 
            return true;
        }


        public function insert($request) {
            $isValidPrice = $this->isValidPrice($request);
            if ($isValidPrice == false) {
                return false;
            }
            try {
                $request->except('_token');
                Hotel::create($request->all());
                Session::flash('success', 'Thêm một khách sạn thành công!');
            } catch(\Exception $err) {
                Session::flash('error', 'Đã xảy ra lỗi, vui lòng thử lại!');
                Log::info($err->getMessage());
                return false;
            }
            return true;
        }


        public function get() {
            return Hotel::with('place')
            ->orderBy('id')->paginate(15);
        }


        public function update($request, $hotel) {
            $isValidPrice = $this->isValidPrice($request);
            if ($isValidPrice == false) {
                return false;
            }

            try {
                $hotel->fill($request->input());
                $hotel->save();
                Session::flash('success', 'Cập nhật thông tin khách sạn thành công');

            } catch(\Exception $err) {
                Session::flash('error', 'Đã xảy ra lỗi, vui lòng thử lại');
                Log::info($err->getMessage());
                return false;
            }
            return true;
        }


        public function delete($request) {
            $hotel = Hotel::where('id', $request->input('id'))->first();
            if ($hotel) {
                $hotel->delete();
                return true;
            } 
            return false;
        }
    }
?>