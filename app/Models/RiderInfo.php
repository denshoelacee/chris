<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiderInfo extends Model
{
    protected $table = 'rider_info';

    protected $primaryKey = 'rider_info_id'; // Primary key
    public $auto_increment = true; // Auto-incrementing
    protected $datatype = 'int';

    protected $fillable = ['vehicle_brand', 'vehicle_type', 'vehicle_model', 'user_id'];

    public function user()  
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
