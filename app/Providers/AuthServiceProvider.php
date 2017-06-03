<?php

namespace News\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Gate;
use News\Article;
use News\Policies\ArticlePolicy;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
//        'News\Model' => 'News\Policies\ModelPolicy',
        Article::class =>ArticlePolicy::class
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
        $gate->define('VIEW_ADMIN',function($user){
            //return $user->canDo(['VIEW_ADMIN', 'ADD_ARTICLES'],FALSE); //FALSE - хотя бы одно право

            return $user->canDo('VIEW_ADMIN',FALSE);
        });

        $gate->define('VIEW_ADMIN_ARTICLES',function($user){
            //return $user->canDo(['VIEW_ADMIN', 'ADD_ARTICLES'],FALSE); //FALSE - хотя бы одно право

            return $user->canDo('VIEW_ADMIN_ARTICLES',FALSE);
        });


    }
}
