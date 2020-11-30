<?php

namespace App\Shop;

use Illuminate\Database\Eloquent\Model;
use App\Shop\Shop;

class Dayoff extends Model
{
    //
    protected $table = 'dayoffs';
    protected $fillable = [
      'name',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    public function shops(){
        return $this->belongsToMany(Shop::class,'shop_dayoffs');
    }
}
