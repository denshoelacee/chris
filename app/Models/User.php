<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $p_key = 'id';
    public $auto_increment = false;
    protected $data_type = 'string';

    protected $fillable = [
        'id',
        'name',
        'age',
        'gender',
        'phone_num',
        'barangay',
        'municipality',
        'city',
        'postal',
        'email',
        'role', 
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];  

    public function roles()
    {
        return $this->hasOne(Role::class,'id', 'role');
    }
    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id', 'user_id');
    }

    public function shipments()
    {
        return $this->hasMany(Shipment::class, 'user_id', 'user_id');
    }

    public function riderInfo()
    {
        return $this->hasOne(RiderInfo::class, 'user_id', 'user_id');
    }
}
