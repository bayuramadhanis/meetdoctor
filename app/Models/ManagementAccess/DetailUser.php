<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class DetailUser extends Model
{
    use softDeletes;
    //declare table
    public $table = 'detail_user';
    //this field is required
    protected $dates =  [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    //declare fill table
    protected $fillable = [
        'user_id',
        'type_user',
        'contact',
        'address',
        'photo',
        'gender',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    // One To Many relationship declaration
    public function type_user()
    {
        //3 parameters (path model, field foreign key, field primary key from table hasmany/hasone)
        return $this->belongsTo('App\Models\MasterData\TypeUser', 'type_user_id', 'id');
    }
    public function user()
    {
        //3 parameters (path model, field foreign key, field primary key from table hasmany/hasone)
        return $this->belongsTo('App\Models\Model', 'user_id', 'id');
    }
}
