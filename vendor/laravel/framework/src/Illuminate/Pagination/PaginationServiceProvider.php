<?php

namespace Illuminate\Pagination;

use Illuminate\Support\ServiceProvider;

class PaginationServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        Paginator::currentPathResolver(function () {
            return $this->app['request']->url();
        });

        Paginator::currentPageResolver(function ($pageName = 'page') {
            return $this->app['request']->input($pageName);
        });

        $this->app->bindShared('paginator', function($app)
        {
            $paginator = new Factory($app['request'], $app['view'], $app['translator']);

            $paginator->setViewName($app['config']['view.pagination']);

            $app->refresh('request', $paginator, 'setRequest');

            return $paginator;
        });
    }

    public function provides()
    {
        return array('paginator');
    }


}
