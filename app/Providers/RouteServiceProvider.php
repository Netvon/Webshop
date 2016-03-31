<?php

namespace App\Providers;

use App\Blog;
use App\Category;
use App\Product;
use App\Tag;
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
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);

        $router->bind('products', function ($idOrSlug) {
            return $this->getModelBySlugOrIdOrFail(Product::class, $idOrSlug);
        });

        $router->bind('categories', function ($idOrSlug) {
            return $this->getModelBySlugOrIdOrFail(Category::class, $idOrSlug);
        });

        $router->bind('tags', function ($idOrSlug) {
            return $this->getModelBySlugOrIdOrFail(Tag::class, $idOrSlug);
        });

        $router->bind('trashedtags', function ($idOrSlug) {
            return $this->getModelBySlugOrIdOrFail(Tag::class, $idOrSlug, true);
        });

        $router->bind('trashedcategories', function ($idOrSlug) {
            return $this->getModelBySlugOrIdOrFail(Category::class, $idOrSlug, true);
        });

        $router->bind('blogs', function ($idOrSlug) {
            return $this->getModelBySlugOrIdOrFail(Blog::class, $idOrSlug);
        });

        $router->bind('blog', function ($idOrSlug) {
            return $this->getModelBySlugOrIdOrFail(Blog::class, $idOrSlug);
        });

        $router->bind('trashedblogs', function ($idOrSlug) {
            return $this->getModelBySlugOrIdOrFail(Product::class, $idOrSlug, true);
        });

        $router->bind('trashedproducts', function ($idOrSlug) {
            return $this->getModelBySlugOrIdOrFail(Product::class, $idOrSlug, true);
        });
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }


    /**
     * @param string $model
     * @param $idOrSlug
     * @param bool $include_trashed
     * @return \Eloquent
     */
    private function getModelBySlugOrIdOrFail($model, $idOrSlug, $include_trashed = false)
    {
        $r = new \ReflectionClass($model);

        /** @var \Eloquent $return_model */
        $return_model = null;

        if ($include_trashed) {
            $trashed = $r->getMethod('withTrashed')->invoke(null)->get();

            foreach ($trashed as $t) {
                if ($t->id == $idOrSlug || $t->slug == $idOrSlug)
                    $return_model = $t;
            }

            if (!$return_model) {
                abort(404);
            }
        } else {
            $return_model = $r->getMethod('findBySlugOrIdOrFail')->invoke(null, $idOrSlug);
        }

        return $return_model;
    }
}
