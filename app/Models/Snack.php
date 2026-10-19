<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Snack extends Model
{
    protected $table = 'snacks';

    public $timestamps = false;

    protected $fillable = ['name', 'flavor', 'price', 'weight', 'image', 'description'];

    protected function rupiah(): Attribute
    {
        return Attribute::get(fn () => 'Rp ' . number_format($this->price, 0, ',', '.'));
    }
}
