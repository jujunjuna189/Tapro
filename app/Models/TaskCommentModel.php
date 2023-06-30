<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskCommentModel extends Model
{
    use HasFactory;
    protected $table = 'task_comment';
    protected $guarded = ['id'];
}
