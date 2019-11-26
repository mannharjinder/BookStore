@extends('Layouts.masterAdmin')
@section('content')
    @include('Shared.navigationBar')
    <h3>Please Fill in the Order Details</h3>

    <form href="{{route('order.create')}}" method="post">
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
                           class="form-control"/>
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
                           class="form-control"/>
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
                           class="form-control"/>
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
                           class="form-control"/>
                </div>
            </div>
            <div>
                <input type="hidden"
                       name="total"
                        value="total">
                <input type="hidden"
                       value="user_id"
                       name="user_id">
            </div>
            {{ csrf_field() }}
            <div class="form-group">
                <div class="col-md-8 text-right">
                    <button type="submit"
                            class="btn btn-success">
                        Place Order <span class="glyphicon glyphicon-fast-forward"></span>
                    </button>
                </div>
            </div>
        </div>
    </form>
    @include('Shared.footer')
@endsection
