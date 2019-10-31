<?php

namespace Niku\Cms\Http;

use Illuminate\Database\Eloquent\Model;
use Niku\Cms\Http\Controllers\cmsController;

class NikuPostmeta extends Model
{
    protected $table = 'cms_postmeta';
    protected $fillable = ['meta_key', 'meta_value', 'group', 'menu_order', 'custom'];

    public function post()
    {
    	return $this->hasOne('Niku\Cms\Http\Posts', 'id', 'post_id');
    }

}

