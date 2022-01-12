@extends('transact')

@section('page-content')


<div class="row">
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

            <form action="/success" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <b>File Gambar</b><br/>
                    <input type="file" name="file">
                </div>

                <input type="submit" value="Upload" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

@endsection
