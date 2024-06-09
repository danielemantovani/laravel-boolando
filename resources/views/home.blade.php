@extends('layouts.app')

@section('content')
    <div class="container w-75">
        <div class="row g-3 mt-5 mb-5">
            @foreach ($products as $product)
                <div class="col-4">
                    <div class="card position-relative">
                        <img src="{{ Vite::asset("resources/img/".$product['frontImage']) }}" alt="{{$product['name']}}">
                        @if ($product ['isInFavorites'] === true)
                            <span class="position-absolute fs-3 px-2 ms_heart ms_heart-fovourite ">&hearts;</span>
                        @else
                            <span class="position-absolute fs-3 px-2 ms_heart">&hearts;</span>
                        @endif
                        @foreach ($product['badges'] as $badge)
                            <p class="position-absolute ms_badge">{{$badge['value']}}</p>
                        @endforeach
                        <div class="card-body ms_card-body">
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