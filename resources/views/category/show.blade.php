@extends('layouts.app', ['page_title' => 'ARROW - ' . $category->name, 'nav_link' => 'shop'])

@section('content')

    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>Webshop</h1>
                </div>
                @include('arrow.partials._breadcrumbs', ['breadcrumbs' => ['ArrowController@index' => 'home', 'CategoryController@index' => 'shop', '0' => $category->name]])
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">

            <div class="row">


                <!-- *** LEFT COLUMN ***
        _________________________________________________________ -->

                <div class="col-sm-3">

                    @include('arrow.partials._filters', ['categories' => App\Category::with('children.children')->get(), 'category' => $category, 'product' => NULL, 'tags' => App\Tag::all(), 'filter_tags' => NULL])

                </div>
                <!-- /.col-md-3 -->

                <!-- *** LEFT COLUMN END *** -->

                <!-- *** RIGHT COLUMN ***
        _________________________________________________________ -->

                <div class="col-sm-9">

                    @include('category.partials._product_list', ['products' => $category->products()->get()])

                </div>
                <!-- /.col-md-9 -->

                <!-- *** RIGHT COLUMN END *** -->

            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->

@endsection