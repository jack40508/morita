<?php

namespace App\News;

use Illuminate\Database\Eloquent\Model;
use App\News\Newstag;

class News extends Model
{
    //
    protected $table = 'news';
    protected $fillable = [
      'title',
      'content',
      'permission',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    public function newstags(){
        return $this->belongsToMany(Newstag::class);
    }
}
