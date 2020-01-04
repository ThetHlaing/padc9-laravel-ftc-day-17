@extends('layouts.main')

@section('content')
<product-detail-holder
        image_url="{{$product->image_url}}"
        name="{{$product->name}}"
        price="{{$product->price}}">
        {{$product->description}}
</product-detail-holder>

@endsection
