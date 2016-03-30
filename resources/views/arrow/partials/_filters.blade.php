<!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
<div class="panel panel-default sidebar-menu">

    <div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">Search</h3>
    </div>

    <div class="panel-body">
        <form action="/search" method="post">
            <div class="input-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" class="form-control" name="body" placeholder="Search">
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>
		            </span>
            </div>
        </form>
    </div>
        </div>

    <div class="panel panel-default sidebar-menu">
        <div class="panel-heading">
            <h3 class="panel-title">Categories</h3>
        </div>

        <div class="panel-body">
            @if (count($categories))
                <ul class="nav nav-pills nav-stacked category-menu">
                    @foreach($categories as $c)
                        @if (is_null($c->parent_id))
                            @if ($product != NULL)
                                @if ($product->category_id == $c->id)
                                    <li class="active">
                                @else
                                    <li>
                                @endif
                            @elseif ($category != NULL)
                                @if ($category->id == $c->id)
                                    <li class="active">
                                @else
                                    <li>
                                @endif
                            @else
                                <li>
                            @endif
                                    <a href="{{ URL::action('CategoryController@show', $c->slug) }}">{{ $c->name }}
                                        <span class="badge pull-right">{{ $c->products->count() }}</span>
                                    </a>

                                    <ul>
                                        @foreach($categories as $ca)
                                            @if ($c->id == $ca->parent_id)
                                                @if ($product != NULL)
                                                    @if ($product->category_id == $ca->id)
                                                        <li class="active">
                                                    @else
                                                        <li>
                                                    @endif
                                                @elseif ($category != NULL)
                                                    @if ($category->id == $ca->id)
                                                        <li class="active">
                                                    @else
                                                        <li>
                                                    @endif
                                                @else
                                                    <li>
                                                @endif

                                                <a href="{{ URL::action('CategoryController@show', $ca->slug) }}">{{ $ca->name }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>

                                </li>
                        @endif
                    @endforeach
                @endif
                </ul>
            </div>
        </div>
    </div>

<div class="panel panel-default sidebar-menu">

    <div class="panel-heading">
        <h3 class="panel-title">Tags</h3>
        <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> <span class="hidden-sm">Clear</span></a>
    </div>

    <div class="panel-body">

        <form>
            <div class="form-group">
                @if ($tags != NULL)
                    @foreach($tags as $t)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">{{ $t->name }}
                            </label>
                        </div>
                    @endforeach
                @endif
            </div>

            <button class="btn btn-default btn-sm btn-template-main"><i class="fa fa-pencil"></i> Apply</button>

        </form>

    </div>
</div>

<!-- *** MENUS AND FILTERS END *** -->