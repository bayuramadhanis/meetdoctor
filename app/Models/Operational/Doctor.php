<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Doctor extends Model
{
    use softDeletes;
    //declare table
    public $table = 'doctor';
    //this field is required
    protected $dates =  [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    //declare fill table
    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    // One To Many relationship declaration
    public function specialist()
    {
        //2 parameters (path model, field foreign key)
        return $this->belongsTo('App\Models\MasterData\Specialist', 'specialist_id', 'id');
    }
    // One To Many relationship declaration
    public function appointment()
    {
        //2 parameters (path model, field foreign key)
        return $this->hasMany('App\Models\Operational\Appointment', 'doctor_id');
    }
}
