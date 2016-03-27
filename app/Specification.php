<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'value',
    ];

    public function product()
    {
        $this->belongsTo(Product::class);
    }
}
