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

          <div class="col col-12">
            <div class="card">
              <div class="card-header">
                Update Shipping
              </div>
              <div class="card-body">
                <form action="/dashboard-shipping/update/{id}" method="post">
                  @csrf()
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="receiver_name">Shipment Provider</label>
                        <input type="text" name="shipment_company" class="form-control" value={{$shipping->shipment_company }}>
                      </div>
                      <div class="form-group">
                        <label for="address">Shipment Type</label>
                        <input type="text" name="shipment_type" class="form-control" value={{$shipping->shipment_type}}>
                      </div>
                      <div class="form-group">
                        <label for="phone">Shipment Price</label>
                        <input type="number" name="shipment_price" class="form-control" value={{$shipping->shipment_price}}>
                      </div>
                      <div class="form-group">
                        <label for="province">Min duration(days)</label>
                        <input type="number" name="min_shipment_duration" class="form-control" value={{$shipping->min_shipment_duration }}>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="city">Max duration(days)</label>
                        <input type="number" name="max_shipment_duration" class="form-control" value={{$shipping->max_shipment_duration }}>
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