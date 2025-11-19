<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     use HasFactory;

    protected $table = 'customer';
    protected $guarded = [];
    protected $fillable = [
        'nama_customer',
        'kode_customer',
        'email_customer',
        'alamat_customer',
        'telepon_customer',
    ];
    public function faktur()
    {
        return $this->hasMany(Faktur::class);
    }
}
