<?php

namespace App\Http\Controllers;

use App\book;

use App\Category;
use App\Supplier;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class BookController extends Controller
{
    public function getIndex()
    {
        $books = book::orderBy('id', 'asc')->get();
        return view('book.index', ['books' => $books]);
    }

    public function getCreate()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('book.create', ['categories' => $categories, 'suppliers' => $suppliers]);
    }

    public function postCreate(Request $request)
    {
        $name = time();
        $this->validate($request, [
            'code' => 'required',
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = $name . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
        }

        $book = new book([
            'category_id' => $request->input('category_id'),
            'code' => $request->input('code'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'image' => $name,
            'supplier_id' => $request->input('supplier_id')
        ]);

        $book->save();

        return redirect()->route('book.index');
    }

    public function getEdit($id)
    {
        $book = book::find($id);
        return view('book.edit', ['book' => $book, 'id' => $id]);
    }

    public function postUpdate(Request $request, $id)
    {
        $book = book::find($id);
        $book->category_id = $request->input('category_id');
        $book->code = $request->input('code');
        $book->name = $request->input('name');
        $book->price = $request->input('price');
        $book->description = $request->input('description');
        $book->image = $request->input('image');
        $book->supplier_id = $request->input('supplier_id');
        $book->save();

        return redirect()->route('book.index');
    }

    public function postDelete(Request $request, $id)
    {
        $book = book::find($id);
        $book->delete();

        return redirect()->route('book.index');
    }
}
