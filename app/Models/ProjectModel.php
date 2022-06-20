<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    use HasFactory;

    protected $table = 'project';
    protected $fillable = ['workspace_id', 'title', 'description', 'deadline', 'visibility'];

    public function workspace()
    {
        return $this->hasOne(WorkspaceModel::class, 'id', 'workspace_id');
    }

    public function task()
    {
        return $this->hasMany(TaskModel::class, 'project_id', 'id');
    }
}
