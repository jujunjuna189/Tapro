<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkspaceModel extends Model
{
    use HasFactory;

    protected $table = 'workspace';
    protected $fillable = ['title', 'description', 'visibility'];

    public function project()
    {
        return $this->hasMany(ProjectModel::class, 'workspace_id', 'id');
    }
}
