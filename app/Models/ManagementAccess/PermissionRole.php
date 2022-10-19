<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class PermissionRole extends Model
{
    use softDeletes;
    //declare table
    public $table = 'permission_role';
    //this field is required
    protected $dates =  [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    //declare fill table
    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function permission()
    {
        //2 parameters (path model, field foreign key)
        return $this->belongsTo('App\Models\ManagementAccess\Permission', 'permission_id', 'id');
    }
    public function role()
    {
        //2 parameters (path model, field foreign key)
        return $this->belongsTo('App\Models\ManagementAccess\Role', 'role_id', 'id');
    }
}
