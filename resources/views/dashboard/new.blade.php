@extends('transact')

@section('page-content')

<div class="container">
    <div class="row">
      <div class="col col-12 mb-2">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col">
                Book
              </div>
              <div class="col-auto">
                <a href="/" class="btn btn-sm btn-danger">
                  Back
                </a>
              </div>
            </div>
          </div>
          <div class="card-body">

            @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-warning">{{ $error }}</div>
            @endforeach
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-warning">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

          <div class="col col-12">
            <div class="card">
              <div class="card-header">
                New Book
              </div>
              <div class="card-body">
                <form action="/dashboard-payment/update/{id}" method="post">
                  @csrf()
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="receiver_name">ISBN</label>
                        <input type="text" name="ISBN" class="form-control" value={{old('ISBN')}}>
                      </div>
                      <div class="form-group">
                        <label for="address">Title</label>
                        <input type="text" name="title" class="form-control" value={{old('title')}}>
                      </div>
                      <div class="form-group">
                        <label for="phone">Description</label>
                        <input type="text" name="description" class="form-control" value={{old('description')}}>
                      </div>
                      <div class="form-group">
                        <label for="province">Price</label>
                        <input type="number" name="price" class="form-control" value={{old('price')}}>
                      </div>

                      <div class="form-group">
                        <label for="province">Category</label>
                        <<select name="category" id="cars">
                            @foreach($category as $data)
                            <option value={{$data->id}}>{{$data->name}}</option>
                            @endforeach
                          </select>
                      </div>

                      <div class="form-group">
                        <label for="province">Publisher</label>
                        <<select name="publisher" id="cars">
                            @foreach($publisher as $data)
                            <option value={{$data->id}}>{{$data->name}}</option>
                            @endforeach
                          </select>
                      </div>

                      <div class="form-group">
                        <label for="province">Author</label>
                        <<select name="author" id="cars">
                            @foreach($author as $data)
                            <option value={{$data->id}}>{{$data->name}}</option>
                            @endforeach
                          </select>
                      </div>

                      <div class="form-group">
                        <label for="province">Year</label>
                        <input type="number" name="year" class="form-control" value={{old('year')}}>
                      </div>
                      <div class="form-group">
                        <label for="phone">Language</label>
                        <input type="text" name="language" class="form-control" value={{old('language')}}>
                      </div>
                      <div class="form-group">
                        <label for="province">Page</label>
                        <input type="number" name="page" class="form-control" value={{old('page')}}>
                      </div>
                      <div class="form-group">
                        <label for="province">Stock</label>
                        <input type="number" name="stock" class="form-control" value={{old('stock')}}>
                      </div>
                      <div class="form-group">
                        <label for="phone">URL to Image</label>
                        <input type="text" name="img" class="form-control" value={{old('img')}}>
                      </div>
                    </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>


        </div>
      </div>
        </div>
      </div>
    </div>
  </div>
@endsection