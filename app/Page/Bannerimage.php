<?php

namespace App\Page;

use Illuminate\Database\Eloquent\Model;
use App\Page\Page;

class Bannerimage extends Model
{
    //
    protected $table = 'BannerImages';
    protected $fillable = [
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    public function pages(){
        return $this->belongsToMany(Page::class);
    }
}
