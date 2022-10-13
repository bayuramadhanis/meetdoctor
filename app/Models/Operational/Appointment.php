<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Appointment extends Model
{
    use softDeletes;
    //declare table
    public $table = 'appointment';
    //this field is required
    protected $dates =  [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    //declare fill table
    protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    // One To Many relationship declaration
    public function doctor()
    {
        //2 parameters (path model, field foreign key)
        return $this->belongsTo('App\Models\Operational\Doctor', 'doctor_id', 'id');
    }
    public function consultation()
    {
        //2 parameters (path model, field foreign key)
        return $this->belongsTo('App\Models\MasterData\Consultation', 'consultation_id', 'id');
    }
    public function user()
    {
        //2 parameters (path model, field foreign key)
        return $this->belongsTo('App\Models\user', 'user_id', 'id');
    }
    // One To Many relationship declaration
    public function transaction()
    {
        //2 parameters (path model, field foreign key)
        return $this->hasOne('App\Models\Operational\Transaction', 'appointment_id');
    }
}
