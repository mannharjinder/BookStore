@extends('Layouts.masterAdmin')
@section('content')
    @include('Shared.navigationBar')
    <h2>Create</h2>

    <h4>Book</h4>
    <hr/>
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('book.update',['id' => $book->id])}}" method="post">
                <div class="form-group">
                    <label for="code" class="control-label col-sm-3">Code</label>
                    <div class="col-sm-9">
                        <input type="text"
                               id="code"
                               name="code"
                               title="code"
                               value="{{$book['code']}}"
                               class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label col-sm-3">Name</label>
                    <div class="col-sm-9">
                        <input type="text"
                               id="name"
                               name="name"
                               value="{{$book['name']}}"
                               class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="price" class="control-label col-sm-3">Price</label>
                    <div class="col-sm-9">
                        <input type="text"
                               id="price"
                               name="price"
                               value="{{$book['price']}}"
                               class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="control-label col-sm-3">Description</label>
                    <div class="col-sm-9">
                        <input type="text"
                               id="description"
                               name="description"
                               value="{{$book['description']}}"
                               class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image" class="control-label col-sm-3">Image</label>
                    <div class="col-sm-9">
                        <input type="text"
                               id="image"
                               name="image"
                               value="{{$book['image']}}"
                               class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="category_id" class="control-label col-sm-3">CategoryID</label>
                    <div class="col-sm-9">
                        <input type="text"
                               id="category_id"
                               name="category_id"
                               title="category_id"
                               value="{{$book['category_id']}}"
                               class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="supplier_id" class="control-label col-sm-3">SupplierID</label>
                    <div class="col-sm-9">
                        <input type="text"
                               id="supplier_id"
                               name="supplier_id"
                               value="{{$book['supplier_id']}}"
                               class="form-control"/>
                    </div>
                </div>
                {{ csrf_field() }}
                <div class="form-group" style="text-align: right; margin-right: 0px">
                    <input type="submit" value="Save" class="btn btn-default"/>
                </div>
            </form>
        </div>
    </div>

    <div>
        <a href="#">Back to List</a>
    </div>
    @include('Shared.footer')
@endsection
