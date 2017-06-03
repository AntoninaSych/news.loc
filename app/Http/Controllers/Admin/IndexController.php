<?php

namespace News\Http\Controllers\Admin;

use Illuminate\Http\Request;

use News\Http\Requests;
use News\Http\Controllers\Controller;
use Gate;
class IndexController extends AdminController
{
    //
    public function __construct(){

        parent::_construct();

        if(Gate::denies('VIEW_ADMIN')){
            abort(403);
        }
        $this->template = env('THEME').'.admin.index';

    }

    public function index(){
        $this->title="Панель администратора";
        return $this->renderOutput();
    }
}
