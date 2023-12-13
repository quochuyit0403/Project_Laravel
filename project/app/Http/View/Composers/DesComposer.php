<?php 
    namespace App\Http\View\Composers;

    use App\Models\Destination;
    use Illuminate\View\View;
    class DesComposer {

        protected $users;

        public function __construct() {
            
        }

        // Bung toàn bộ cơ sở dữ liệu ra View
        public function compose(View $view) 
        {

            $destinations = Destination::select('id', 'name', 'parent_id')->where('active', 1)->orderBy('id')->get();

            $view->with('destinations', $destinations);
        }
    }
?>