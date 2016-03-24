@extends('layouts.app', ['page_title' => 'Category test'])

@section('content')
    <ul>
        @foreach($categories as $category)
        <li>{{$category->name}}</li>
        @endforeach
    </ul>
@endsection