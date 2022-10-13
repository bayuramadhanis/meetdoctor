<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Specialist extends Model
{
    use softDeletes;
    //declare table
    public $table = 'specialist';
    //this field is required
    protected $dates =  [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    //declare fill table
    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    // One To Many relationship declaration
    public function doctor()
    {
        //2 parameters (path model, field foreign key)
        return $this->hasMany('App\Models\Operational\Doctor', 'specialist_id');
    }
}
