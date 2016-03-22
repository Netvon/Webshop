<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'description_long', 'description_short',
    ];

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function parent()
    {
        $this->belongsTo(Category::class);
    }

    public function order_price()
    {
        return $this->pivot->quantity * $this->price;
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)
            ->withPivot('quantity')
            ->withTimestamps();
    }

    public function filters()
    {
        return $this->belongsToMany(Filter::class)
            ->withPivot('value')
            ->withTimestamps();
    }

    public function specifications()
    {
        return $this->hasMany(Specification::class);
    }

}
