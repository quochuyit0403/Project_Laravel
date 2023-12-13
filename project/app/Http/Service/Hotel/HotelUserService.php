<?php
    namespace App\Http\Service\Hotel;

use App\Models\Hotel;

    class HotelUserService {
        const LIMIT = 16;
        public function get() {
            return Hotel::select('id', 'name', 'price', 'price_sale', 'descriptions', 'thumb', 'star')
            ->orderBy('id')
            ->limit(self::LIMIT)
            ->get();
        }


        public function show($id) {
            return Hotel::where('id', $id)
            ->where('active', 1)
            // ->with('place')
            ->firstOrFail();
        }
    }
?>