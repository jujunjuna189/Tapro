<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    use HasFactory;
    protected $table = 'task';
    protected $fillable = ['project_id', 'title', 'completed', 'deleted'];

    public function share()
    {
        return $this->hasMany(ShareModel::class, 'task_id', 'id');
    }

    public function comment()
    {
        return $this->hasMany(TaskCommentModel::class, 'task_id', 'id');
    }
}
