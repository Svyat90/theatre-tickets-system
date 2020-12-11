<?php

namespace App\Helpers;

class LabelHelper
{

    /**
     * @param $val
     * @return string
     */
    public static function boolLabel($val) : string
    {
        $str = $val ? __('global.yes') : __('global.no');

        return '<span class="badge badge-' . ($val ? 'success' : 'danger') . '">' . $str . '</span>';
    }

    /**
     * @param $color
     * @return string
     */
    public static function colorLabel($color) : string
    {
        return "<span style='background-color: $color; padding-left: 15px; padding-right: 15px;' >&nbsp;</span>";
    }


}
