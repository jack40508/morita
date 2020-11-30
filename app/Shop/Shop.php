<?php

namespace App\Shop;

use Illuminate\Database\Eloquent\Model;
use App\Shop\Dayoff;
use App\Shop\Shoptype;

class Shop extends Model
{
    //
    protected $table = 'shops';
    protected $fillable = [
      'name',
      'address',
      'mail',
      'phone',
      'about',
      'opentime',
      'closetime',
      'shoptype_id',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    public function dayoffs(){
        return $this->belongsToMany(Dayoff::class,'shop_dayoffs');
    }

    public function shoptype(){
        return $this->belongsTo(Shoptype::class);
    }
}
