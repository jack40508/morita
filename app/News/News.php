<?php

namespace App\News;

use Illuminate\Database\Eloquent\Model;
use App\News\Newstag;
use App\News\Newsimage;
use App\News\Newskategorie;

class News extends Model
{
    //
    protected $table = 'news';
    protected $fillable = [
      'title',
      'content',
      'permission',
      'kategorie_id',
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

    public function newskategorie(){
        return $this->belongsTo(Newskategorie::class);
    }

}
