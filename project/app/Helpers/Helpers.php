<?php
    namespace App\Helpers;

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
        public static function active ($active = 0 ) {
            return $active == 0 ? '<span class = "btn btn-danger btn-xs">Không</span>' : '<span class = "btn btn-success btn-xs">Có</span>';
        }
    }
?>