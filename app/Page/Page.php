<?php

namespace App\Page;

use Illuminate\Database\Eloquent\Model;
use App\Page\Bannerimage;

class Page extends Model
{
    //
    protected $table = 'pages';
    protected $fillable = [
      'name',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    public function bannerimages(){
        return $this->belongsToMany(Bannerimage::class, 'page_bannerimages')->withPivot('id', 'start_at', 'end_at', 'updated_at');
    }
}
