<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingListing extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'city', 'country', 'postal_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)
            ->withTimestamps();
    }
}
