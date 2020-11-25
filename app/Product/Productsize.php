<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;
use App\Product\Product;

class Productsize extends Model
{
    //
    protected $table = 'productsizes';
    protected $fillable = [
      'product_id',
      'size',
      'price',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    public function product(){
        return $this->belongsTo(Product::class);
    }

}
