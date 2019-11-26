<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function getIndex()
    {
        $categories = Category::orderBy('id', 'asc')->get();
        return view('Category.index', ['categories' => $categories]);
    }

    public function getCreate()
    {
        return view('Category.create');
    }

    public function postCreate(Request $request )
    {
        //validation
        $this->validate($request, [
            'code' => 'required',
            'name' => 'required',
        ]);
        //save to database
        $category =  new Category([
            'code' => $request->input('code'),
            'name' => $request->input('name'),
        ]);

        $category->save();

        return redirect()->route('category.index');
    }

    public function getEdit($id)
    {
        $category = Category::find($id);
        return view('category.edit',['category' => $category, 'id' => $id]);
    }

    public function postUpdate(Request $request, $id)
    {
        $category = Category::find($id);
        $category->code = $request->input('code');
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('category.index');
    }

    public function postDelete(Request $request, $id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('category.index');
    }
}
