<?php
    namespace App\Http\Service;

    class UploadService {
        public function store($request) {
            if ($request->hasFile('file')) {
                try {

                    $name = $request->file('file')->getClientOriginalName();

                    // Đường dẫn đầy đủ cho thư mục
                    $pathFull = 'uploads/' .date('Y/m/d');

                    // Lưu vào public và đường dẫn file được tạo
                    $request->file('file')->storeAs(
                        'public/' . $pathFull, $name
                    );
                    return '/storage/' . $pathFull . '/' .$name;
                }
                catch(\Exception $error) {
                    return false;
                }
            }
        } 
    }
?>