<?php
    namespace App\Http\Service\Destination;

    use App\Models\Destination;
    use Illuminate\Support\Facades\Session;

    class DestinationService {

        public function getParent()
        {
            return Destination::where('parent_id', 0)->get();
        }

        public function create($request) {
        
            try {
                Destination::create([
                    'name' => (string) $request->input('name'),
                    'parent_id' => (int)$request->input('parent_id'),
                    'description' => (string) $request->input('description'),
                    'content' => (string) $request->input('content'),
                    'active' => (string) $request->input('active')
                ]);

                Session::flash('success', 'Tạo địa điểm thành công!');

            } catch(\Exception $err) {
                Session::flash('error', $err->getMessage());
                return false;
            }
            return true;
        }


        public function getAll() {
            return Destination::orderBy('id')->paginate(20);
        }

        public function destroy($request) {

            $id = (int) $request->input('id');
            $destination = Destination::where('id', $id)->first();

            if ($destination) {
                return Destination::where('id', $id)->orWhere('parent_id', $id)->delete();
            }
        }


        public function update($request, $destination) : bool {

            if ($request->input('parent_id') != $destination->id) {
                $destination->parent_id = (int) $request->input('parent_id');
            }
    
            $destination->name = (string) $request->input('name');
            $destination->description = (string) $request->input('description');
            $destination->content = (string) $request->input('content');
            $destination->active = (string) $request->input('active');
            $destination->save();

            Session::flash('success', 'Cập nhật địa điểm thành công');
            return true;
        }
    }

?>