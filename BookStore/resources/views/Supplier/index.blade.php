@extends('Layouts.masterAdmin')
@section('content')
    @include('Shared.navigationBar')
    <h2>Supplier Management</h2>
    <p>
        <a href="{{route('supplier.create')}}">Create New</a>
    </p>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-primary">
            <th>
                Name
            </th>
            <th>
                Email
            </th>
            <th>
                Phone Number
            </th>
            <th>
                Address
            </th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($suppliers as $supplier)
            <tr>
                <td>
                    {{$supplier->name}}
                </td>
                <td>
                    {{$supplier->email}}
                </td>
                <td>
                    {{$supplier->phoneNumber}}
                </td>
                <td>
                    {{$supplier->address}}
                </td>
                <td>
                    <a href="{{route('supplier.edit', ['id'=> $supplier->id])}}" class="btn-warning">Edit</a>
                    <br/>
                    <a href="{{route('supplier.delete', ['id'=> $supplier->id])}}" class="btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @include('Shared.footer')
@endsection
