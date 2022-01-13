@extends('transact')

@section('page-content')

<div class="container">
    <div class="row">
      <div class="col col-12 mb-2">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col">
                Payment
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
            <div class="table-responsive">
              <table class="table table-stripped">
                <thead>
                  <tr>
                    <th>Payment Method</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Admin fee</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($payment as $data)
                  <tr>
                    <td>
                      {{ $data->payment_method }}
                    </td>
                    <td>
                      {{ $data->payment_type}}
                    </td>
                    <td>
                      {{ $data->payment_desc }}
                    </td>
                    <td>
                        {{$data->admin_fee}}
                    </td>
                    <td>
                      <form action="/dashboard-payment/update/{{$data->id}}" method="GET">
                        @csrf()
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                      </form>
                    </td>

                    <td>
                        <form action="{{route('payment.destroy', $data->id)}}" method="POST">
                          @csrf()
                          {{ method_field('delete') }}
                          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                      </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>

          
          <div class="col col-12">
            <div class="card">
              <div class="card-header">
                New Payment
              </div>
              <div class="card-body">
                <form action="{{ route('payment.store') }}" method="post">
                  @csrf()
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="receiver_name">Payment Method</label>
                        <input type="text" name="payment_method" class="form-control" value={{old('payment_method') }}>
                      </div>
                      <div class="form-group">
                        <label for="address">Type</label>
                        <input type="text" name="payment_type" class="form-control" value={{old('payment_type') }}>
                      </div>
                      <div class="form-group">
                        <label for="phone">Description</label>
                        <input type="textr" name="payment_desc" class="form-control" value={{old('payment_desc') }}>
                      </div>
                      <div class="form-group">
                        <label for="province">Admin Fee</label>
                        <input type="number" name="admin_fee" class="form-control" value={{old('admin_fee') }}>
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