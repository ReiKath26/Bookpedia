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
                    <th>Shipment Provider</th>
                    <th>Type</th>
                    <th>Delivery fee</th>
                    <th>Duration</th>
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
                      <form action="{{ route('shipping.update', $data->id) }}" method="post">
                        @method('patch')
                        @csrf()
                        @if($data->status == 'selected')
                        <button type="submit" class="btn btn-primary btn-sm" disabled>Selected</button>
                        @else
                        <button type="submit" class="btn btn-primary btn-sm">Select</button>
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
        </div>
      </div>
    </div>
  </div>
  @endsection
