@extends('master')

@section('page-content')

<div class="container my-5 color-brown ">
    <div class="row color-brown">
        <div class="col-3">
            <h4>{{ Auth::user()->name }}</h4>
            <div class="list-group">
                <a href="" class="list-group-item list-group-item-action active" aria-current="true"
                style="background-color: brown">
                Order
                </a>
            </div>
        </div>
        <div class="col-9 text-center">
        <div class="list-group">
            <h1 class="fw-bold">Order List</h1>
            @if (!$histories->isEmpty())
                @foreach ($histories as $history)
                    <a href="/history/{{ $history->id }}" class="color-brown list-group-item list-group-item-action">
                        <div class="d-flex justify-content-between px-3">
                            <span>{{ $history->created_at }}</span>
                            <span class="fw-bold">{{ $history->status }}</span>
                        </div>
                    </a>
                    
                @endforeach
                
            @else
                <hr>
                <h3 class="fw-bold">No Order Yet!</h3>
            @endif
        </div>
    </div>
</div>


@endsection