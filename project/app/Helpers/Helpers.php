<?php
    namespace App\Helpers;

    use Illuminate\Support\Str;

    class Helpers {
        public static function destination($destinations, $parent_id = 0, $char = '') {
            $html = '';

            foreach ($destinations as $key => $destination) {
                if ($destination->parent_id == $parent_id) {
                    $html .= '
                        <tr>
                            <td>' . $destination->id. '</td>
                            <td>' . $char . $destination->name. '</td>
                            <td>' . self::active($destination->active). '</td>
                            <td>' . $destination->updated_at. '</td>
                            <td>
                                <a href="/admin/destinations/edit/' . $destination->id . '" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="#" class="btn btn-danger btn-sm"
                                    onclick="removeRow('. $destination->id .', \'/admin/destinations/destroy\')" >
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    ';

                    unset($destinations[$key]);
                    $html .= self::destination($destinations, $destination->id, $char . '--');
                }
            }
            return $html;
        } 


        # Ni la tao phuong thuc icon cho ACTIVE
        public static function active ($active = 0) {
            return $active == 0 ? '<span class = "btn btn-danger btn-xs">Không</span>' : '<span class = "btn btn-success btn-xs">Có</span>';
        }


        # Tạo hàm để đệ quy lên menu, hiển thị destination từ cơ sở dữ liệu ra menu
        public static function destinations($destinations, $parent_id = 0) {
            $html = '';
            foreach($destinations as $key => $destination) {
                if ($destination->parent_id == $parent_id) {
                    $html .= '
                        <li class="dropdown">
                            <a href="/diem-den/' . $destination->id . '-'. Str::slug($destination->name, '-') .'.html")>
                                ' . $destination->name . '
                            </a> ';

                    if (self::isChild($destinations, $destination->id)) {
                        $html .= '<ul>';
                        $html .= self::destinations($destinations, $destination->id);
                        $html .= '</ul>';
                    }

                     $html .=  '</li>';
                }
            }
            return $html;
        }


        // Check coi là hắn có huyện mô nằm trong quận nữa không
        public static function isChild($destinations, $id) :bool{
            foreach ($destinations as $destination) {
                if ($destination->parent_id == $id) {
                    return true;
                }
            }
            return false;
        }
    }
?>