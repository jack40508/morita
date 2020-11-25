<?php

namespace App\News;

use Illuminate\Database\Eloquent\Model;

class NewsNewstag extends Model
{
    //
    protected $table = 'news_newstags';
    protected $fillable = [
      'news_id',
      'newstag_id',
    ];
}
