<?php

namespace App\News;

use Illuminate\Database\Eloquent\Model;
use App\News\Newstag;
use App\News\Newsimage;

class News extends Model
{
    //
    protected $table = 'news';
    protected $fillable = [
      'title',
      'content',
      'permission',
      'upload_at',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    public function newstags(){
        return $this->belongsToMany(Newstag::class);
    }

    public function newsimages(){
      return $this->hasMany(Newsimage::class);
  }
}
