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
        return $this->belongsToMany(Bannerimage::class);
    }
}
