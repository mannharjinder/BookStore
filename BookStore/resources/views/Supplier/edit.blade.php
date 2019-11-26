@extends('Layouts.masterAdmin')
@section('content')
    @include('Shared.navigationBar')
    <h4>Supplier</h4>
    <hr/>
    <div class="row">
        <div class="col-md-4">
            <form href="{{route('supplier.update', ['id'=> $supplier->id])}}"
                  method="post">
                <input type="hidden" name="id" value="{{$supplier['id']}}"/>
                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input type="text"
                           name="name"
                           id="name"
                           value="{{$supplier['name']}}"
                           class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="text"
                           name="email"
                           id="email"
                           value="{{$supplier['email']}}"
                           class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="control-label">Phone Number</label>
                    <input type="text"
                           name="phoneNumber"
                           id="phoneNumber"
                           value="{{$supplier['phoneNumber']}}"
                           class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="address" class="control-label">Address</label>
                    <input type="text"
                           name="address"
                           id="address"
                           value="{{$supplier['address']}}"
                           class="form-control"/>
                </div>
                {{csrf_field()}}
                <div class="form-group">
                    <input type="submit" value="Save" class="btn btn-default"/>
                </div>
            </form>
        </div>
    </div>

    <div>
        <a href="{{route('supplier.index')}}">Back to List</a>
    </div>
    @include('Shared.footer')
@endsection
