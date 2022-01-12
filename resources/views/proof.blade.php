@extends('transact')

@section('page-content')


<div class="row text-center">
    <div class="container">
        <h2 class="text-center my-5">Please upload your transaction proof here</h2>

        <div class="col-lg-8 mx-auto my-5">

            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }} <br/>
                @endforeach
            </div>
            @endif

            <form action="/success" method="GET" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group mb-5">
                    <b class="fs-4">Picture File</b><br/>
                    <br>
                    <input type="file" name="file">
                </div>

                <input type="submit" value="Upload" class="btn btn-secondary">
            </form>
        </div>
    </div>
</div>

@endsection
