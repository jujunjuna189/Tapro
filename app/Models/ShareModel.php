<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareModel extends Model
{
    use HasFactory;
    protected $table = 'share';
    protected $fillable = ['user_id', 'task_id', 'access'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function task()
    {
        return $this->hasOne(TaskModel::class, 'id', 'task_id');
    }
}
