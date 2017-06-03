<?php

namespace News;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function users(){
        return $this->belongsToMany('News\User','role_user');

    }

    public function perms(){
        return $this->belongsToMany('News\Permission','permission_role');
    }

}
