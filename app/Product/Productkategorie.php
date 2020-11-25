<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;
use App\Product\Product;

class Productkategorie extends Model
{
    //
    protected $table = 'productkategories';
    protected $fillable = [
      'name',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    public function products(){
        return $this->hasMany(Product::class);
    }
}
