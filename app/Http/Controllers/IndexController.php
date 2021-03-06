<?php

namespace News\Http\Controllers;

use Illuminate\Http\Request;

use News\Articles;
use News\Http\Requests;
use News\Repositories\ArticlesRepository;
use Config;

class IndexController extends SiteController
{
    public function __construct(ArticlesRepository $a_rep){
//        parent::__construct(new \News\Repositories\ArticlesRepository(new \News\Model));

      $this->a_rep=$a_rep;
        $this->template= env('THEME').'.index';
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=$this->getArticles();
        $this->contentRightBar = view(env('THEME').'.indexBar')->with('articles',$articles)->render();
        return $this->renderOutput();
    }

        protected function getArticles(){
            $articles = $this->a_rep->get(['title','created_at','img','alias'],Config::get('settings.home_articles_count'));
            //dd($articles);
            return $articles;
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
