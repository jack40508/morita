<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;
use App\Product\Productprize;
use App\Product\Productkategorie;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $fillable = [
      'name',
      'productkategorie_id',
      'is_sell',
      'selldate',
      'soldoutdate',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    public function productsizes(){
        return $this->hasMany(Productsize::class);
    }

    public function productkategorie(){
        return $this->belongsTo(Productkategorie::class);
    }
}
