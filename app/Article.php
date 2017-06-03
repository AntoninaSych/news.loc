<?php

namespace News;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','img','alias','text','desc','category_id'];
    //
    public function user()
    {
        return $this->belongsTo('News\User');
    }

    public function category(){
        return $this->belongsTo('News\Category');
    }


}
