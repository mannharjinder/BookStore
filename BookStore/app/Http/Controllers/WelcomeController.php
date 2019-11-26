<?php

namespace App\Http\Controllers;

use App\book;
use App\Category;
use App\Supplier;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(['auth','verified']);
//    }

    public function getIndex()
    {
        $books = book::orderBy('id', 'asc')->get();
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('Welcome', [
            'books' => $books,
            compact('books'),
            'categories' => $categories,
            'suppliers' => $suppliers
        ]);
    }

    public function getIndexDetail()
    {
        $books = book::orderBy('id', 'asc')->paginate(8);
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('Home.index', [
            'books' => $books,
            'categories' => $categories,
            'suppliers' => $suppliers
        ]);
    }

    public function searchBy(Request $request)
    {
        $paginate = 8;
        $category_id = $request->category_id;
        $suppliers_id = $request->supplier_id;
        $searchString = $request->SearchString;
        $category = Category::all();
        $suppliers = Supplier::all();
        $books = book::orderBy('id', 'asc')->paginate($paginate);

        if ($category_id != null)
        {
            $books = book::where('category_id', 'LIKE', '%' . $category_id . '%')->paginate($paginate);
        }
        elseif ($suppliers_id != null)
        {
            $books = book::where('supplier_id', 'LIKE', '%' . $suppliers_id . '%')->paginate($paginate);
        }
        elseif($searchString != null)
        {
            $books = book::where('name', 'LIKE', '%' . $searchString . '%')->paginate($paginate);
        }

        return view('Home.index', [
            'books' => $books,
            'categories' => $category,
            'suppliers' => $suppliers
        ]);
    }
}
