<?php
    namespace App\Http\Service;

use App\Models\Cart;
use App\Models\Customer;
use App\Models\Place;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Arr;
use PhpParser\Node\Expr\Cast\Array_;

    class CartSerVice {
        // public function create($request) {
            
        //     $place_id = (int)$request->input('place_id');
        //     if ($place_id <= 0) {
        //         Session::flash('error', "Địa điểm không hợp lệ!");
        //         return false;
        //     }

        //     // Hàng ni là lấy ra cái id của tour hiện tại thôi, mấy cái id của tour cũ sẽ bị xóa hết
        //     Session::forget('carts');

        //     $carts = Session::get('carts', []); // mặc định là một mảng rỗng nếu 'carts' không tồn tại
        //     $placeIDs = array_keys($carts);

        //     $exists = in_array($place_id, $placeIDs);
        //     if(!$exists) {
        //         // Nếu chưa tồn tại thì thêm vào bảng
        //         $carts[$place_id] = true;
        //         Session::put('carts', $carts);
        //         Session::save();
        //     }

        //     // Lấy ra danh sách các $placeIDS
        //     $placeIDs = array_keys($carts);

            
        //     dd($placeIDs);
        // }


        public function getPlace($place_id) {
            return Place::select('id', 'name', 'price', 'thumb')
            ->where('active', 1)
            ->where('id', $place_id)
            ->first();
        }


        public function addCart($request) {
            try {
                DB::beginTransaction();

                $customer = Customer::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'date' => $request->input('date'),
                    'people_number' => $request->input('people_number'),
                ]);

                $place_id = $request->input('place_id');
                $place = $this->getPlace($place_id);

                // dd($place);

                if ($place) {
                    $this->infoPlaceCart($customer->id, $place->id, $place->price);
                } else {
                    DB::rollBack();
                    Session::flash('error', "Book Tour không thành công! Tour không tồn tại.");
                    return false;
                }
                
                DB::commit();
                Session::forget('_token');
                Session::flash('success', "Book Tour thành công! Chúc bạn có một trải nghiệm tốt nhất!");

            } catch(\Exception $err) {
                DB::rollBack();
                Session::flash('error', "Book Tour không thành công!");
                return false;
            }
            return true;
        }


        public function infoPlaceCart($customer_id, $place_id, $price) {
            try {
                DB::beginTransaction();
        
                $data = [
                    'customer_id' => $customer_id,
                    'place_id' => $place_id,
                    'price' => $price
                ];
        
                Cart::insert($data);
        
                DB::commit();
        
                return true;
            } catch(\Exception $err) {
                DB::rollBack();
                // Xử lý lỗi theo yêu cầu của ứng dụng của bạn, ví dụ: ghi log hoặc hiển thị thông báo lỗi cho người dùng
                return false;
            }
        }
    }
?>