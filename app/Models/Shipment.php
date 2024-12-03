<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $primaryKey = 'shipment_id'; // Primary key
    public $auto_increment = true; // Auto-incrementing
    protected $datatype = 'int';

    protected $fillable = ['order_id', 'user_id', 'shipment_date', 'est_arr_date', 'act_arr_date'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'order_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
