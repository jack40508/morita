<?php

namespace App\News;

use Illuminate\Database\Eloquent\Model;
use App\News\News;

class NewsNewstag extends Model
{
    //
    protected $table = 'news_newstag';
    protected $fillable = [
      'news_id',
      'newstag_id',
    ];

    public function news(){
      return $this->belongsToMany(News::class);
    }

    public function open_news(){
      return $this->belongsToMany(News::class)->where('upload_at', '<=', date('Y/m/d H:i:s'))->where('permission', true)->orderBy('created_at', 'DESC')->orderBy('upload_at', 'DESC');
    }
}
