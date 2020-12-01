<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';
    protected $fillable = [
     'nama','harga','gambar',
    ];

    public function customer()
    {
        return $this->belongsToMany('App\Customer')->withPivot('created_at');
    }
}

