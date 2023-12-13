<?php
    namespace App\Http\Service\Place;

    use App\Http\Requests\Place\PlaceRequest;
    use App\Models\Destination;
    use App\Models\Place;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\Log;

    class PlaceService {

        public function getDestination()
        {
            return Destination::where('active', 1)->get();
        }

        protected function isValidPrice($request) {
            if ($request->input('price') != 0 && $request->input('price_sale') != 0
            && $request->input('price_sale') >= $request->input('price')
            ) {
                Session::flash('error', 'Giá ưu đãi phải nhỏ hơn giá gốc!');
                return false;
            }

            if ($request->input('price_sale') != 0 && (int) $request->input('price') == 0) {
                Session::flash('error', 'Vui lòng nhập giá gốc!');
                return false;
            }
            return true;
        }

        public function insert($request) {
            $isvalidPrice = $this->isValidPrice($request);
            if ($isvalidPrice == false) {
                return false;
            }
            try {
                $request->except('_token');
                Place::create($request->all());
                
                Session::flash('success', 'Thêm Tour thành công!');
                
            } catch(\Exception $err) {
                Session::flash('error', 'Thêm Tour thất bại!');
                Log::info($err->getMessage());
                return false;
            }
            return true;
        }

        public function get() {
            return Place::with('destination')
                ->orderBy('id')->paginate(15);
        }


        // Update
        public function update($request, $place) {
            $isvalidPrice = $this->isValidPrice($request);
            if ($isvalidPrice == false) {
                return false;
            }

            try {
                $place->fill($request->input());
                $place->save();
                Session::flash('success', 'Cập nhật Tour thành công!');
            } catch(\Exception $err) {
                Session::flash('error', "Có lỗi khi cập nhật, vui lòng thử lại!");
                return false;
            } 
            return true;
        }

        // Destroy
        public function delete($request) {
            $place = Place::where('id', $request->input('id'))->first();
            if ($place) {
                $place->delete();
                return true;
            }
            return false;
        }


        // Hien thi ra man hinh nhung cai anh, du lieu tu co so du lieu
        // public function show() {
        //     return Place::select('name', 'id', 'descriptions', 'price', 'price_sale', 'thumb', 'star', 'day_number')
        //     ->where('destination_id', 0)
        //     ->orderBy('id')
        //     ->get();
        // }
    }

?>