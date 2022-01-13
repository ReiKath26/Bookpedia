@extends('transact')

@section('page-content')

<div class="container">
    <div class="row">
      <div class="col col-12 mb-2">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col">
                Shipping
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
                    <th>Shipment Provider</th>
                    <th>Type</th>
                    <th>Delivery fee</th>
                    <th>Duration</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($shipping as $data)
                  <tr>
                    <td>
                      {{ $data->shipment_company }}
                    </td>
                    <td>
                      {{ $data->shipment_type}}
                    </td>
                    <td>
                      {{ $data->shipment_price }}
                    </td>
                    <td>
                        {{$data->min_shipment_duration}} - {{$data->max_shipment_duration}} days
                    </td>
                    <td>
                      <form action="/dashboard-shipping/update/{{$data->id}}" method="GET">
                        @csrf()
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                      </form>
                    </td>

                    <td>
                        <form action="{{route('shipping.destroy', $data->id)}}" method="POSt">
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
                New Shipping
              </div>
              <div class="card-body">
                <form action="{{ route('shipping.store') }}" method="post">
                  @csrf()
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="receiver_name">Shipment Provider</label>
                        <input type="text" name="shipment_company" class="form-control" value={{old('shipment_company') }}>
                      </div>
                      <div class="form-group">
                        <label for="address">Shipment Type</label>
                        <input type="text" name="shipment_type" class="form-control" value={{old('shipment_type') }}>
                      </div>
                      <div class="form-group">
                        <label for="phone">Shipment Price</label>
                        <input type="number" name="shipment_price" class="form-control" value={{old('shipment_price') }}>
                      </div>
                      <div class="form-group">
                        <label for="province">Min duration(days)</label>
                        <input type="number" name="min_shipment_duration" class="form-control" value={{old('min_shipment_duration') }}>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="city">Max duration(days)</label>
                        <input type="number" name="max_shipment_duration" class="form-control" value={{old('max_shipment_duration') }}>
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
