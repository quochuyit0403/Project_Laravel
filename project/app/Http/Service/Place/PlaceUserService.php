<?php
    namespace App\Http\Service\Place;
    use App\Models\Place;

    class PlaceUserService {
        const LIMIT = 16;
        public function get() {
            return Place::select('id', 'name', 'price', 'price_sale', 'content', 'descriptions', 'thumb', 'star', 'day_number', 'thumb_1', 'thumb_2', 'thumb_3', 'thumb_4',)
            ->orderBy('id')
            ->limit(self::LIMIT)
            ->get();
        }



        public function show($id) {
            return Place::where('id', $id)
            ->where('active', 1)
            ->with('destination')
            ->firstOrFail();
        }
    }
?>