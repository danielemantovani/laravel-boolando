@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row g-3 mt-5">
            @foreach ($products as $product)
                <div class="col-4">
                    <div class="card">
                        <img src="{{ Vite::asset("resources/img/".$product['frontImage']) }}" alt="">
                        <div class="card-body">
                            <p>{{$product['brand']}}</p>
                            <h4>{{$product['name']}}</h4>
                            <p class="text-danger fw-bold">{{$product['price']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection