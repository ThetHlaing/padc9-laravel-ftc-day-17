@extends('layouts.main')

@section('content')
    @foreach($items as $item)
        <cart-item image_url="{{$item->product->image_url}}">
            <div>{{$item->product->name}}</div>
            <div>{{$item->product->price}} USD x {{$item->qty}}</div>
        </cart-item>       

        
    @endforeach

    <button type="submit" class="btn btn-primary">Checkout</button>
@endsection