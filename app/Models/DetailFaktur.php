<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailFaktur extends Model
{
    protected $fillable = [
        'faktur_id',
        'product_id',
        'qty',
        'harga',
    ];

    public function faktur()
    {
        return $this->belongsTo(Faktur::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
