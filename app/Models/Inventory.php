<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{   protected $table = 'inventory';

    protected $primaryKey = 'product_id'; // Primary key
    public $auto_increment = true; // Auto-incrementing
    protected $datatype = 'int';

    protected $fillable = ['product_name', 'product_desc', 'quantity', 'unit_price'];

    public function orders()
    {
        return $this->hasMany(Order::class, 'product_id', 'product_id');
    }
}