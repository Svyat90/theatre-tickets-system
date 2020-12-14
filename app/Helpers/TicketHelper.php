<?php

namespace App\Helpers;

class TicketHelper
{

    /**
     * @param array       $vars
     * @param array       $colData
     * @param string|null $side
     * @param int         $floor
     * @param bool        $isLoggia
     *
     * @return string
     */
    public static function generateName(array $vars, array $colData, ? string $side = null, int $floor = 1, bool $isLoggia = false)
    {
        $str = '';
        if ($floor === 1) {
            $str .= $vars['spectacle_map_first_floor'] . ' ';
        } else {
            $str .= $vars['spectacle_map_balcon'] . ' ';
        }

        if ($isLoggia) {
            $str .= $vars['spectacle_map_lodge'] . ' ';
        }

        if ($side) {
            if ($side === 'on_right') {
                $str .= $vars['spectacle_map_right'] . ' ';
            } elseif ( $side === 'on_left') {
                $str .= $vars['spectacle_map_left'] . ' ';
            }
        }

        $str .= $vars['spectacle_row'] . ' ' .  $colData['row'] . ' ';
        $str .= $vars['spectacle_place'] . ' ' .  $colData['seat'];

        return trim($str);
    }

}
