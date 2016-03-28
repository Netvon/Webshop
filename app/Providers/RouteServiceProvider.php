<?php

namespace App\Providers;

use App\Category;
use App\Product;
use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);

        $router->bind('products', function($idOrSlug)
        {
            $products = Product::with('tags', 'specifications', 'category', 'images')
                ->get();

            $product = null;

            foreach ($products as $p) {
                if ($p->id == $idOrSlug || $p->slug == $idOrSlug)
                    $product = $p;
            }

            if (!$product) {
                abort(404);
            }

            return $product;
        });

        $router->bind('categories', function($idOrSlug)
        {
            return Category::findBySlugOrIdOrFail($idOrSlug);
        });
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
