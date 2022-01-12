@extends('master')

@section('page-content')

@php
    $productTotal = 0;
@endphp

<div class="container my-5">
    <div class="row color-brown">
        <div class="col-3">
            <h4>{{ Auth::user()->name }}</h4>
            <div class="list-group">
                <a href="/history" class="list-group-item list-group-item-action">Order</a>
                <a href="" class="list-group-item list-group-item-action active" aria-current="true" style="background-color: brown">
                    Detail History
                </a>
            </div>
        </div>
        <div class="col-9">
            <div class="card p-3 fw-bolder">
                <div class="d-flex justify-content-between">
                    <p >Order Status</p>
                    <p class=" @if ($head->status == "Success")
                        text-success
                        @else
                        text-danger
                    @endif ">{{ $head->status }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="">Order Date</p>
                    <p>{{ date_format($head->created_at,"M d, Y") }}</p>
                </div>
            </div>
            <h1 class="fw-bold">Product Detail</h1>
            @foreach ($details as $detail)
                <div class="card p-3">
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="d-flex justify-content-between">
                            <img src="{{ $detail->book->img }}" height="150px" alt="">
                            <div class="ms-3">
                                <h5>{{ $detail->book->title }}</h5>
                                <p>Rp. {{ $detail->book->price }} x {{ $detail->qty }}</p>
                            </div>
                        </div>
                        <a class="text-decoration-none text-white px-3 py-1 rounded" href="/books/{{ $detail->book->id }}" style="background-color: brown">Beli Lagi</a>
                    </div>
                </div>

                @php
                    $productTotal += $detail->book->price * $detail->qty;
                @endphp
                
            @endforeach

            <h1 class="fw-bold">Order Address</h1>
            <div class="fw-bolder">
                <p>{{ $head->address->receiver_name }}</p>
                <p>{{ $head->address->phone }}</p>
                <p>{{ $head->address->address }}, {{ $head->address->city }}</p>
                <p>{{ $head->address->province }}, {{ $head->address->postcode }}</p>
            </div>
            <h3 class="fw-bold">Courier {{ $head->shipping->shipment_company }}</h3>
            
            <br><br>
            <h1 class="fw-bold">Transaction Detail</h1>
            <div class="fw-bolder">
                <div class="d-flex justify-content-between">
                    <p>Payment Method</p>
                    <p>{{ $head->payment->payment_method }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>product price</p>
                    <p>Rp. {{ $productTotal }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Shipping price</p>
                    <p>Rp. {{ $head->shipping->shipment_price }}</p>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <h3 class="fw-bold">Total Price</h3>
                <h3 class="fw-bold">Rp. {{ $head->total }}</h3>
            </div>
        </div>
    </div>
    
</div>


@endsection