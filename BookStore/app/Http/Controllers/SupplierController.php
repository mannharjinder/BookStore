<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    public function getIndex()
    {
        $suppliers = Supplier::orderBy('id', 'asc')->get();
        return view('Supplier.index', ['suppliers' => $suppliers]);
    }

    public function getCreate()
    {
        return view('Supplier.create');
    }

    public function postCreate(Request $request )
    {
        //validation
        $this->validate($request, [
            'name' => 'required|min:1',
            'email' => 'required|email',
        ]);

        //save to database
        $supplier =  new Supplier([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phoneNumber' => $request->input('phoneNumber'),
            'address' => $request->input('address')
        ]);

        $supplier->save();

        return redirect()->route('supplier.index');
    }

    public function getEdit($id)
    {
        $supplier = Supplier::find($id);
        return view('supplier.edit',['supplier' => $supplier, 'id' => $id]);
    }

    public function postUpdate(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->name = $request->input('name');
        $supplier->email = $request->input('email');
        $supplier->phoneNumber = $request->input('phoneNumber');
        $supplier->address = $request->input('address');
        $supplier->save();

        return redirect()->route('supplier.index');
    }

    public function postDelete(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();

        return redirect()->route('supplier.index');
    }
}
