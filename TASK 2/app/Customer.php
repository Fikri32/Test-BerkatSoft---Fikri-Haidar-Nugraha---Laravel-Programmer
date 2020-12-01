<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $table = 'customers';
    protected $fillable = [
     'nama','alamat','no_hp','foto'
    ];
    
    public function produk()
    {
        return $this->belongsToMany('App\Produk')->withPivot('created_at');
    }
    
   
}
