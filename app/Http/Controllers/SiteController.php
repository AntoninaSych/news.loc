<?php

namespace News\Http\Controllers;

use Illuminate\Http\Request;

use News\Http\Requests;
use News\Repositories\ArticlesRepository;

class SiteController extends Controller
{
    //
    protected $p_rep;
    protected $a_rep;
    protected $template;
    protected $vars=array();
    protected $contentRightBar=false;
    public function __construct() {
//    $this->a_rep=$a_rep;
    }

    protected function renderOutput(){


        if($this->contentRightBar) {
            $rightBar = view(env('THEME').'.rightBar')->with('content_rightBar',$this->contentRightBar)->render();
            $this->vars = array_add($this->vars,'rightBar',$rightBar);
        }


//        return view($this->template)->with($this->vars,$rightBar);
        return view($this->template)->with($this->vars);
    }
//    protected function getArticles(){
//    $articles = $this->a_rep->get();
//    }
}
