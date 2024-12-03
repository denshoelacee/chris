<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $primaryKey = 'order_id'; // Primary key
    public $auto_increment = true; // Auto-incrementing
    protected $datatype = 'int';

    protected $fillable = ['product_id', 'user_id', 'order_date', 'quantity_order', 'inventory_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'product_id', 'product_id');
    }

    public function shipments()
    {
        return $this->hasOne(Shipment::class, 'order_id', 'order_id');
    }

    
}
