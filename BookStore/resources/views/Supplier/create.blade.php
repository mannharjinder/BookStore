@extends('Layouts.masterAdmin')
@section('content')
    @include('Shared.navigationBar')
    <h4>Supplier</h4>
    <hr/>
    <div class="row">
        <div class="col-md-4">
            <form href="{{route('supplier.create')}}" method="post" >
                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="control-label">Phone Number</label>
                    <input type="text" name="phoneNumber" id="phoneNumber" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="address" class="control-label">Address</label>
                    <input type="text" name="address" id="address" class="form-control"/>
                </div>
                {{csrf_field()}}
                <div class="form-group">
                    <input type="submit" value="Create" class="btn btn-default"/>
                </div>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <div>
        <a href="{{route('supplier.index')}}">Back to List</a>
    </div>
    @include('Shared.footer')
@endsection
