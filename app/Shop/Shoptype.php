<?php

namespace App\Shop;

use Illuminate\Database\Eloquent\Model;
use App\Shop\Shop;

class Shoptype extends Model
{
    //
    protected $table = 'shoptypes';
    protected $fillable = [
      'name',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    public function shops(){
        return $this->belongsTo(Shop::class);
    }
}
