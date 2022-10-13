<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class TypeUser extends Model
{
    use softDeletes;
    //declare table
    public $table = 'type_user';
    //this field is required
    protected $dates =  [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    //declare fill table
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // One To Many relationship declaration
    public function detail_user()
    {
        //2 parameters (path model, field foreign key)
        return $this->hasMany('App\Models\ManagementAccess\DetailUser', 'type_user_id');
    }
}
