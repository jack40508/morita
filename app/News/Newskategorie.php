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
}
