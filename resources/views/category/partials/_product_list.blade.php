<p class="text-muted lead">In our Technology department we offer wide selection of the best products we have found and carefully selected worldwide.</p>

<div class="row products">
    @if (!is_null($products))
        @if (count($products) > 0)
            @foreach($products as $p)
                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image">
                            <a href="{{ URL::action('ProductController@show', $p->slug) }}">
                                @if ($p->images_by_type('thumbnail')->first() != NULL)
                                <img src="{{ asset($p->images_by_type('thumbnail')->first()->image_uri) }}" alt="{{ $p->name }}" class="img-responsive image1">
                                @else
                                    <img src="{{ asset('img/texture-bw.png') }}" alt="{{ $p->name }}" class="img-responsive image1">
                                @endif
                            </a>
                        </div>
                        <!-- /.image -->
                        <div class="text">
                            <h3><a href="{{ URL::action('ProductController@show', $p->slug) }}">{{ $p->name }}</a></h3>
                            <p class="price">$ {{ $p->price }}</p>
                            <p class="buttons">
                                <a href="{{ URL::action('ProductController@show', $p->slug) }}" class="btn btn-default">View detail</a>
                                <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </p>
                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.product -->
                </div>

            @endforeach
        @else
            @include('notification.partials._alert', ['message_level' => 'info', 'message' => 'No products found'])
        @endif
    @endif
                    <!-- /.col-md-4 -->
</div>
<!-- /.products -->

<div class="row">

    <div class="col-md-12 banner">
        <a href="#">
            <img src="{{ asset('img/arrow.png') }}" alt="" class="img-responsive">
        </a>
    </div>

</div>