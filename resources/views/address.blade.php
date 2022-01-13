@extends('transact')

@section('page-content')

<div class="container">
    <div class="row">
      <div class="col col-12 mb-2">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col">
                Shipping Address
              </div>
              <div class="col-auto">
                <a href="{{ URL::to('checkout') }}" class="btn btn-sm btn-danger">
                  Close
                </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-stripped">
                <thead>
                  <tr>
                    <th>Receiver name</th>
                    <th>Address</th>
                    <th>Phone number</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($address as $data)
                  <tr>
                    <td>
                      {{ $data->receiver_name }}
                    </td>
                    <td>
                      {{ $data->address}}<br />
                      {{ $data->city}}, {{ $data->province}} - {{ $data->postcode}}
                    </td>
                    <td>
                      {{ $data->phone}}
                    </td>
                    <td>
                      <form action="{{ route('shippingaddress.update', $data->id) }}" method="post">
                        @method('patch')
                        @csrf()
                        @if($data->status == 'selected')
                        <button type="submit" class="btn btn-primary btn-sm" disabled>Selected</button>
                        @else
                        <button type="submit" class="btn btn-primary btn-sm">Switch Address</button>
                        @endif
                      </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col col-8">
        <div class="card">
          <div class="card-header">
            New Shipping Address
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
            <form action="{{ route('shippingaddress.store') }}" method="post">
              @csrf()
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="receiver_name">Receiver name</label>
                    <input type="text" name="receiver_name" class="form-control" value={{old('receiver_name') }}>
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" value={{old('address') }}>
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" value={{old('no_tlp') }}>
                  </div>
                  <div class="form-group">
                    <label for="province">Province</label>
                    <input type="text" name="province" class="form-control" value={{old('province') }}>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" value={{old('city') }}>
                  </div>
                  <div class="form-group">
                    <label for="postcode">Postcode</label>
                    <input type="text" name="postcode" class="form-control" value={{old('postcode') }}>
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
  @endsection
