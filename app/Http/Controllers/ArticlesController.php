<?php

namespace News\Http\Controllers;

use Illuminate\Http\Request;
use News\Repositories\ArticlesRepository;
use News\Http\Requests;

class ArticlesController extends SiteController
{

    public function __construct(ArticlesRepository $a_rep){
        $this->a_rep=$a_rep;
        $this->template= env('THEME').'.articles';
    }

    public function index()
    {
        $articles = $this->getArticles();
      //  $this->contentRightBar = view(env('THEME').'.indexBar')->with('articles',$articles);


        $content=view(env('THEME').'.articles_content')->with('articles',$articles)->render();
        $this->vars=array_add($this->vars,'content',$content);
//        dd($content);
        return $this->renderOutput();
    }
    
    public function getArticles($alias= FALSE)
    {
        $articles = $this->a_rep->get(['title','alias','created_at','img','desc','user_id','category_id'],FALSE,TRUE);

       if($articles)
       {
        //   $articles->load('user','category');
       }
        return $articles;
    }

    public function show($alias=FALSE){

        $article=$this->a_rep->one($alias['alias'],false);

        $content = view(env('THEME').'.article_content')->with('article',$article)->render();
        $this->vars = array_add($this->vars,'content',$content);
        return $this->renderOutput();

    }
}
