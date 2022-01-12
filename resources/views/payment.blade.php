@extends('transact')

@section('page-content')

<div class="container">
    <div class="row">
      <div class="col col-12 mb-2">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col">
                Payment Method
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
                    <th>Payment Method</th>
                    <th>Description</th>
                    <th>Admin Fee</th>
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
                      {{ $data->payment_desc}}
                    </td>
                    <td>
                      {{ $data->admin_fee }}
                    </td>
                    <td>
                      <form action="{{ route('payment.update', $data->id) }}" method="post">
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
  </div>
  @endsection
