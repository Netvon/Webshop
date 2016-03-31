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

        $router->bind('tags', function($idOrSlug)
        {
            return Tag::findBySlugOrIdOrFail($idOrSlug);
        });

        $router->bind('trashedtags', function($idOrSlug)
        {
            $tags = Tag::withTrashed()->get();

            $tag = null;

            foreach ($tags as $t) {
                if ($t->id == $idOrSlug || $t->slug == $idOrSlug)
                    $tag = $t;
            }

            if (!$tag) {
                abort(404);
            }

            return $tag;
        });

        $router->bind('trashedcategories', function($idOrSlug)
        {
            $categories = Category::withTrashed()->get();

            $category = null;

            foreach ($categories as $c) {
                if ($c->id == $idOrSlug || $c->slug == $idOrSlug)
                    $category = $c;
            }

            if (!$category) {
                abort(404);
            }

            return $category;
        });

        $router->bind('blogs', function($idOrSlug)
        {
            return Blog::findBySlugOrIdOrFail($idOrSlug);
        });

        $router->bind('blog', function($idOrSlug)
        {
            return Blog::findBySlugOrIdOrFail($idOrSlug);
        });

        $router->bind('trashedblogs', function($idOrSlug)
        {
            $blogs = Blog::withTrashed()->get();

            $blog = null;

            foreach ($blogs as $c) {
                if ($c->id == $idOrSlug || $c->slug == $idOrSlug)
                    $blog = $c;
            }

            if (!$blog) {
                abort(404);
            }

            return $blog;
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
