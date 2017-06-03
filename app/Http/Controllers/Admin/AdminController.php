<?php

namespace News\Http\Controllers\Admin;

use Illuminate\Http\Request;

use News\Http\Requests;
use News\Http\Controllers\Controller;
use Auth;
use Menu;
class AdminController extends \News\Http\Controllers\Controller
{
    //
    protected $a_prep;
    protected $user;
    protected $template;
    protected $content=FALSE;
    protected $title=FALSE;
    protected $vars;

    public function _construct(){
        $this->user = Auth::user();
        if(!$this->user)
        {
            abort(403);
        }
    }

    public function renderOutput(){
        $this->vars=array_add($this->vars,'title',$this->title);
        $menu = $this->getMenu();
        $navigation = view(env('THEME').'.admin.navigation')->with('menu',$menu)->render();
        $this->vars=array_add($this->vars,'navigation',$navigation);
        if($this->content){
            $this->vars=array_add($this->vars, 'content',$this->content);
        }
 return view($this->template)->with($this->vars);

    }

    public function getMenu(){
        return Menu::make('adminMenu', function($menu){
            $menu->add('Home',  array('route'=>'admin.articles.index'));
            $menu->add('Статьи',  array('route'=>'admin.articles.index'));
            $menu->add('Пользователи',array('route'=>'admin.articles.index'));
            $menu->add('Привилегии',  array('route'=>'admin.articles.index'));
        });
    }
}
