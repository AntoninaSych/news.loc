<?php

namespace News;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    public function roles()
    {
        return $this->belongsToMany('News\Role','permission_role');

    }
}
