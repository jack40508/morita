<?php

namespace App\News;

use Illuminate\Database\Eloquent\Model;

class NewsNewstag extends Model
{
    //
    protected $table = 'news_newstag';
    protected $fillable = [
      'news_id',
      'newstag_id',
    ];
}
