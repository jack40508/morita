<?php

namespace App\News;

use Illuminate\Database\Eloquent\Model;
use App\News\News;

class Newsimage extends Model
{
    //
    protected $table = 'newsimages';
    protected $fillable = [
      'news_id',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    public function news(){
        return $this->belongsTo(News::class);
    }
}
