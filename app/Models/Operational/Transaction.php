<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Transaction extends Model
{
    use softDeletes;
    //declare table
    public $table = 'transaction';
    //this field is required
    protected $dates =  [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    //declare fill table
    protected $fillable = [
        'appointment_id',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'subtotal',
        'vat',
        'total',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    // One To Many relationship declaration
    public function appointment()
    {
        //2 parameters (path model, field foreign key)
        return $this->belongsTo('App\Models\Operational\Appointment', 'appointment_id', 'id');
    }
}
