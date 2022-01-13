@extends('transact')

@section('page-content')

<form action="/dashboard-books/new-books" method="GET">
    @csrf()
    <button type="submit" class="btn btn-primary btn-sm">New Book</button>
  </form>

<div class="d-flex">
    <div class="col-8" id="all-books-data">
        <div class="row no-gutters">
    @foreach($books as $data)
    <div class="card" style="width: 18rem;">
        <img src="{{$data['img']}}" class="card-img-top" alt="Picture">
          <div class="card-body">
            <h5 class="card-title">{{$data['title']}}</h5>
            <p class="card-text fs-5">Rp. {{$data['price']}}</p>

      <div class="d-flex">
        <form action="/dashboard-books/update/{{$data->id}}" method="GET">
            @csrf()
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    
        <form action="/dashboard-books/delete/{{$data->id}}" method="POST">
            @csrf()
            {{ method_field('delete') }}
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
     </div>
      </div>
    @endforeach
    </div>

    </div>

</div>

    @endsection