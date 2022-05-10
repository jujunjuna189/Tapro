<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalModel extends Model
{
    use HasFactory;

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
}
