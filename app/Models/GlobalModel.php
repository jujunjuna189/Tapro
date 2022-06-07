<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalModel extends Model
{
    use HasFactory;

    protected static function nav_menus($index)
    {
        $menus = [
            (object) [
                'title' => 'Beranda',
                'nav_code' => 0,
            ],
            (object) [
                'title' => 'Ruang Kerja',
                'nav_code' => 1,
            ],
        ];

        return $menus[$index];
    }

    protected static function my_icon()
    {
        $icon = (object)[
            'bell_ringing' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell-ringing" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' .
                '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' .
                '<path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>' .
                '<path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>' .
                '<path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727"></path>' .
                '<path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727"></path>' .
                '</svg>',
            'dots_vertical' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots-vertical" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' .
                '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' .
                '<circle cx="12" cy="12" r="1"></circle>' .
                '<circle cx="12" cy="19" r="1"></circle>' .
                '<circle cx="12" cy="5" r="1"></circle>' .
                '</svg>',
            'edit_circle' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' .
                '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' .
                '<path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>' .
                '<path d="M16 5l3 3"></path>' .
                '<path d="M9 7.07a7.002 7.002 0 0 0 1 13.93a7.002 7.002 0 0 0 6.929 -5.999"></path>' .
                '</svg>',
            'eye' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' .
                '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' .
                '<circle cx="12" cy="12" r="2"></circle>' .
                '<path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>' .
                '</svg>',
            'home' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' .
                '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' .
                '<polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>' .
                '<path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>' .
                '<path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>' .
                '</svg>',
            'plus' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' .
                '<path stroke="none" d="M0 0h24v24H0z" fill="none" />' .
                '<line x1="12" y1="5" x2="12" y2="19" />' .
                '<line x1="5" y1="12" x2="19" y2="12" />' .
                '</svg>',
            'layer' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-multiple" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' .
                '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' .
                '<rect x="7" y="3" width="14" height="14" rx="2"></rect>' .
                '<path d="M17 17v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2"></path>' .
                '</svg>',
            'layer_grid' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-grid-add" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' .
                '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' .
                '<rect x="4" y="4" width="6" height="6" rx="1"></rect>' .
                '<rect x="14" y="4" width="6" height="6" rx="1"></rect>' .
                '<rect x="4" y="14" width="6" height="6" rx="1"></rect>' .
                '<path d="M14 17h6m-3 -3v6"></path>' .
                '</svg>',
            'layout_board' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-board" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' .
                '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' .
                '<rect x="4" y="4" width="16" height="16" rx="2"></rect>' .
                '<path d="M4 9h8"></path>' .
                '<path d="M12 15h8"></path>' .
                '<path d="M12 4v16"></path>' .
                '</svg>',
            'setting' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' .
                '<path stroke="none" d="M0 0h24v24H0z" fill="none"/>' .
                '<path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />' .
                '<circle cx="12" cy="12" r="3" />' .
                '</svg>',
            'users' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' .
                '<path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" />' .
                '<path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />' .
                '<path d="M16 3.13a4 4 0 0 1 0 7.75" />' .
                '<path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />' .
                '</svg>',
        ];

        return $icon;
    }

    protected static function format_date_front($date)
    {
        $date = date('d F Y', strtotime($date));
        return $date;
    }

    protected static function format_date_back($date)
    {
        $date = date('Y-m-d', strtotime($date));
        return $date;
    }

    protected static function access_workspace($value)
    {
        $type = [
            (object) [
                'access' => 'view',
                'add' => false,
                'update' => false,
            ],
            (object) [
                'access' => 'comment',
                'add' => false,
                'update' => true,
            ],
            (object) [
                'access' => 'editor',
                'add' => true,
                'update' => true,
            ]
        ];

        if ($value < count($type)) {
            $value = $type[$value];
        } else {
            $value = $type[0];
        }

        return $value;
    }

    protected static function set_status_task($value)
    {
        $status = ['To Do', 'In Progress', 'In Review', 'Completed'];

        if ($value < count($status)) {
            $value = $status[$value];
        } else {
            $value = '...';
        }

        return $value;
    }

    protected static function set_color_status_task($value)
    {
        $status = ['blue', 'yellow', 'orange', 'teal'];

        if ($value < count($status)) {
            $value = $status[$value];
        } else {
            $value = 'danger';
        }

        return $value;
    }

    protected static function do_count_specific_key_value($value, $key, array $array)
    {
        $array = (array) json_decode(json_encode($array), true);
        $arr = array_filter($array, function ($var) use ($value, $key) {
            if ($value === $var[$key]) {
                return true;
            }
        });

        return count($arr);
    }

    protected static function difference_in_days($value)
    {
        $now_date = date('Y-m-d');

        $value = strtotime($value) - strtotime($now_date);

        $day = $value / 60 / 60 / 24;

        return $day;
    }

    protected static function overlayText($value)
    {
        $value = strlen($value) > 50 ? substr($value, 0, 50) . '...' : $value;

        return $value;
    }
}
