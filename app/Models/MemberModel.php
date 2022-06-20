<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    use HasFactory;
    protected $table = 'member';
    protected $fillable = ['user_id', 'workspace_id', 'role', 'access'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function workspace()
    {
        return $this->hasOne(WorkspaceModel::class, 'id', 'workspace_id');
    }
}
