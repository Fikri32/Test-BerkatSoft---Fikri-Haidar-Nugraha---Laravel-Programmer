<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table = 'customer_produk';
  protected $fillable = [
  'customer_id','produk_id','created_at'
  ];

    
    
 
}
