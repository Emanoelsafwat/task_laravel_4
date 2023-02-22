<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $details = Product::all();
        return view('pages.index' , compact('details'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

    }


    public function show(int $id)
    {
    $detail = Product::where('id' , $id)->first();
        return view('pages.show' , compact('detail'));
    }





    public function edit(int $id)
    {
        $detail = Product::where('id' , $id)->first();
        return View('pages.edit', compact('detail'));


    }



    public function update(ProductRequest $request, int $id)
    {

        $detail = Product::where('id', $id)->first();
        $detail->update($request->all());
        return redirect('product/index')->with('success', 'Customer updated!');
    }






    public function destroy(int $id)
    {
        Product::where('id' , $id)->delete();
        return redirect('product/index' )->with('success' , 'Product Deleted');

    }
}
