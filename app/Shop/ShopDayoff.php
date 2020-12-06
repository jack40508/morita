<?php

namespace App\Shop;

use Illuminate\Database\Eloquent\Model;

class ShopDayoff extends Model{
    //
    //
    protected $table = 'shop_dayoffs';
    protected $fillable = [
      'shop_id',
      'dayoff_id',
    ];
}
