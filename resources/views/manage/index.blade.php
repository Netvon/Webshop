@extends('layouts.arrow_page', ['page_title' => 'Management Tools'])

@section('page_content')
    <section class="bar background-white">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box-simple">
                            <a href="{{ URL::action('Manage\ProductController@index') }}"><div class="icon">
                                    <i class="fa fa-mobile"></i>
                                </div></a>
                            <h3>Manage Products</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple">
                            <a href="{{ URL::action('Manage\TagController@index') }}"><div class="icon">
                                    <i class="fa fa-tags"></i>
                                </div></a>
                            <h3>Manage Tags</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple">
                            <a href="{{ URL::action('Manage\CategoryController@index') }}"><div class="icon">
                                    <i class="fa fa-folder-open"></i>
                                </div></a>
                            <h3>Manage Categories</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box-simple">
                            <a href="{{ URL::action('Manage\ProductController@create') }}"><div class="icon">
                                    <i class="fa fa-plus-circle"></i>
                                </div></a>
                            <h3>Create new Product</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple">
                            <a href="{{ URL::action('Manage\BlogController@index') }}"><div class="icon">
                                    <i class="fa fa-rss"></i>
                                </div></a>
                            <h3>Manage Blog Posts</h3>
                        </div>
                    </div>
                    {{--<div class="col-md-4">--}}
                        {{--<div class="box-simple">--}}
                            {{--<a href="{{ URL::action('Manage\CategoryController@index') }}"><div class="icon">--}}
                                    {{--<i class="fa fa-envelope-o"></i>--}}
                                {{--</div></a>--}}
                            {{--<h3>Manage Categories</h3>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>

@endsection