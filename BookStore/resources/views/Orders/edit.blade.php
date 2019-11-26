@extends('Layouts.masterAdmin')
@section('content')
    @include('Shared.navigationBar')
    <h3>Please Fill in the Order Details</h3>

    <form href="{{route('order.update',['id'=>$order->id])}}" method="post">
        <div class="form-horizontal">
            <hr/>
            <div class="form-group">
                <label class="col-md-2 control-label"
                       for="firstName">
                    First Name:
                </label>
                <div class="col-md-6">
                    <input name="firstName"
                           id="firstName"
                           class="form-control"
                           value="{{$order->firstName}}"/>
                </div>
            </div>
            <div class="form-group">
                <label for="lastName"
                       class="col-md-2 control-label">
                    Last Name:
                </label>
                <div class="col-md-6">
                    <input name="lastName"
                           id="lastName"
                           class="form-control"
                           value="{{$order->lastName}}"/>
                </div>
            </div>
            <div class="form-group">
                <label for="phone"
                       class="col-md-2 control-label">
                    Phone:
                </label>
                <div class="col-md-6">
                    <input name="phone"
                           id="phone"
                           class="form-control"
                           value="{{$order->phone}}"/>
                </div>
            </div>
            <div class="form-group">
                <label for="address"
                       class="col-md-2 control-label">
                    Address:
                </label>
                <div class="col-md-6">
                    <input name="address"
                           id="address"
                           class="form-control"
                           value="{{$order->address}}"/>
                </div>
            </div>
            <div class="form-group">
                <label for="status"
                       class="col-md-2 control-label">
                    Status:
                </label>
                <div class="col-md-6">
                    <select name="status" class="form-control">
                        @if($order->status == 1)
                            <option selected value="1">Waiting</option>
                            <option value="0">Shipped</option>
                        @else
                            <option value="1">Waiting</option>
                            <option selected value="0">Shipped</option>
                        @endif

                    </select>

                </div>
            </div>
            <div>
                <input type="hidden"
                       value="user_id"
                       name="user_id">
            </div>
            {{ csrf_field() }}
            <div class="form-group">
                <div class="col-md-8 text-right">
                    <button type="submit"
                            class="btn btn-success">
                        Save <span class="glyphicon glyphicon-fast-forward"></span>
                    </button>
                </div>
            </div>
        </div>
    </form>
    @include('Shared.footer')
@endsection
