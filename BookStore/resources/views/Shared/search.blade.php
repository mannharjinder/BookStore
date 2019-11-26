<div class="row books-search">
    <div class="container">

        <form method="get" action="{{route('book.searchBy')}}">
            {{ csrf_field() }}
            <div class="col-sm-6 col-md-3">
                <div class="form-group">
                    <input value="" type="text" class="form-control" id="keyword" placeholder="Book Title"
                           name="SearchString">
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="btn-group">
                    <select class="custom-select custom-select-sm form-control" id="category_id" name="category_id">
                        <option value="">
                            Categories
                        </option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">
                                {{$category->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="clearfix visible-sm"></div>
            <div class="col-sm-6 col-md-3">
                <div class="btn-group">
                    <select class="custom-select custom-select-sm form-control" id="supplier_id" name="supplier_id">
                        <option value="">
                            Suppliers
                        </option>
                        @foreach($suppliers as $supplier)
                            <option value="{{$supplier->id}}">
                                {{$supplier->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="form-group">
                    <input type="hidden">
                    <button type="submit" value="" class="btn btn-primary btn-block">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
