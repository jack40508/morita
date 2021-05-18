<?php

namespace App\News;

use Illuminate\Database\Eloquent\Model;
use App\News\News;

class Newskategorie extends Model
{
    //
    protected $table = 'newskategories';
    protected $fillable = [
      'name',
    ];

    public function news(){
        return $this->hasMany(News::class);
    }

    public function open_news(){
      return $this->hasMany(News::class)->where('upload_at', '<=', date('Y/m/d H:i:s'))->where('permission', true)->orderBy('id', 'DESC')->orderBy('created_at', 'DESC')->orderBy('upload_at', 'DESC');
   }
}
