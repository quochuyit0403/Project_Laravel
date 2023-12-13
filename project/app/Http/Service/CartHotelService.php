<?php
    namespace App\Http\Service;

use App\Models\CartHotel;
use App\Models\CustomerHotel;
use App\Models\Hotel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

    class CartHotelService{

        public function getHotel($hotel_id) {
            return Hotel::select('id', 'name', 'price', 'thumb')
            ->where('active', 1)
            ->where('id', $hotel_id)
            ->first();
        }

        public function addCart($request) {
            try {

                DB::beginTransaction();
                $customers_hotel = CustomerHotel::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'checkin' => $request->input('checkin'),
                    'checkout' => $request->input('checkout'),
                    'room_qty' => $request->input('room_qty'),
                ]);

                $hotel_id = $request->input('hotel_id');
                $hotel = $this->getHotel($hotel_id);

                // dd($hotel);

                if ($hotel) {
                    $this->infoHotelCart($customers_hotel->id, $hotel->id, $hotel->price, $request->input('room_qty'));
                } else {
                    DB::rollBack();
                    Session::flash('error', "Book Room không thành công!");
                    return false;
                }

                DB::commit();
                Session::forget('_token');
                Session::flash('success', "Book Room thành công! Chúc bạn có một trải nghiệm tốt nhất!");

                
            } catch(\Exception $err) {
                DB::rollBack();
                Session::flash('error', "Book Room không thành công!");
                return false;
            }
            return true;
        }


        public function infoHotelCart($customer_hotel_id, $hotel_id, $price, $room_qty) {
            try {
                DB::beginTransaction();

                $total_price = $room_qty * $price; 

                $data = [
                    'customer_hotel_id' => $customer_hotel_id,
                    'hotel_id' => $hotel_id,
                    'price' => $total_price
                ];

                CartHotel::insert($data);

                DB::commit();

                return true;

            } catch (\Exception $err) {
                DB::rollBack();
                return false;
            }
        }
    }
?>