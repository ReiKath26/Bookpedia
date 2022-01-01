@extends('transact')

@section('page-content')

<div class="container">
    <div class="row">
      <div class="col col-8">
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
              <div class="card-header">Shipping Address</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-stripped">
                    <thead>
                      <tr>
                        <th>Receiver Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($thisShippingAddress)
                      <tr>
                        <td>
                          {{ $thisShippingAddress->receiver_name }}
                        </td>
                        <td>
                          {{ $thisShippingAddress->address }}<br />
                          {{ $thisShippingAddress->city}}, {{ $thisShippingAddress->province}} - {{ $thisShippingAddress -> province}}
                        </td>
                        <td>
                          {{ $thisShippingAddress->phone }}
                        </td>
                        <td>
                          <a href="{{ route('shippingaddress.index') }}" class="btn btn-success btn-sm">
                            Change address
                          </a>
                        </td>
                      </tr>
                    @endif
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer">
                <a href="{{ route('shippingaddress.index') }}" class="btn btn-sm btn-primary">
                  Add new address
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="row mb-2">
            <div class="col col-12 mb-2">
              <div class="card">
                <div class="card-header">
                  Your Order
                </div>
                <div class="card-body">
                    @foreach($thisCart->details as $detail)

                    <div class="d-flex">

                        <img class="cart-image m-3" src={{$detail->product->img}}>

                        <div class="data-cart d-inline">
                        <div class="title-cart ml-2 mt-2">{{$detail->product->title}}</div>
                        <div class="title-author">{{$detail->product->author->name}}</div>
                        <div class="title-sub">{{$detail->subtotal}}</div>

                        </div>
                    </div>

                    @endforeach
                </div>
              </div>
            </div>
      </div>

      <div class="col col-12">
        <div class="card">
          <div class="card-header">Shipping Method</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-stripped">
                <thead>
                  <tr>
                    <th>Shipping Company</th>
                    <th>Type</th>
                    <th>Delivery fee</th>
                    <th>Duration</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @if($thisShipping)
                  <tr>
                    <td>
                      {{ $thisShipping->shipment_company }}
                    </td>
                    <td>
                      {{ $thisShipping->shipment_type }}
                    </td>
                    <td>
                      {{ $thisShipping->shipment_price }}
                    </td>
                    <td>
                        {{$thisShipping->min_shipment_duration}} - {{$thisShipping->max_shipment_duration}} days
                    </td>
                    <td>
                      <a href="{{ route('shipping.index') }}" class="btn btn-success btn-sm">
                        Change Method
                      </a>
                    </td>
                  </tr>

                  @else
                  <td>None selected</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <a href="{{ route('shipping.index') }}" class="btn btn-success btn-sm">
                      Pick Method
                    </a>
                  </td>
                @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="card">
          <div class="card-header">Payment Method</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-stripped">
                <thead>
                  <tr>
                    <th>Payment Method</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @if($thisPayment)
                  <tr>
                    <td>
                      {{ $thisPayment->payment_method}}
                    </td>
                    <td>
                      <a href="{{ route('payment.index') }}" class="btn btn-success btn-sm">
                        Change Payment
                      </a>
                    </td>
                  </tr>

                  @else
                <td>None selected</td>

                <td>
                    <a href="{{ route('payment.index') }}" class="btn btn-success btn-sm">
                      Pick Payment Method
                    </a>
                  </td>
                @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


      <div class="col col-4">
        <div class="card">
          <div class="card-header">
            Overview
          </div>
          <div class="card-body">
            <table class="table">
              <tr>
                <td>Subtotal</td>
                <td class="text-right">
                 Rp.  {{$thisCart->total}}
                </td>
              </tr>
              @if($thisShipping)
              <tr>
                <td>Shipping fee</td>
                <td class="text-right">
                    Rp. {{$thisShipping->shipment_price}}
                </td>
              </tr>
              @endif
              @if($thisPayment)
              <tr>
                <td>Admin fee</td>
                <td class="text-right">
                    Rp. {{$thisPayment->admin_fee}}
                </td>
              </tr>
              @endif
              <tr>
                <td>Total</td>

                @if($thisShipping && $thisPayment)
                <td class="text-right">
                   Rp.  <?php $thisCart->total + $thisShipping->shipment_price + $thisPayment->admin_fee?>
                </td>
                @else
                <td>Calculating...</td>
                @endif
              </tr>
            </table>
          </div>
          <div class="card-footer">
            <form action="/order/billing" method="post">
              @csrf()
              <button type="submit" class="btn btn-danger btn-block">Order</button>
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
