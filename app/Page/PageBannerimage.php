<?php

namespace App\Page;

use Illuminate\Database\Eloquent\Model;

class PageBannerimage extends Model
{
    //
    protected $table = 'page_bannerimages';
    protected $fillable = [
      'page_id',
      'bannerimage_id',
      'reserve',
      'start_at',
      'end_at',
    ];
}
