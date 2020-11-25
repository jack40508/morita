<?php

namespace App\News;

use Illuminate\Database\Eloquent\Model;
use App\News\News;

class Newstag extends Model
{
    //
    protected $table = 'newstags';
    protected $fillable = [
      'name',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    public function news(){
        return $this->belongsToMany(News::class);
    }
}
