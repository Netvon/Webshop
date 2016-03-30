<div class="col-md-5">
    <ul class="breadcrumb">
        @foreach($breadcrumbs as $key => $value)
            @if ($key == '0')
                <li>{{ $value }}</li>
            @else
                <li><a href="{{ URL::action( $key ) }}">{{ $value }}</a></li>
            @endif
        @endforeach
    </ul>

</div>