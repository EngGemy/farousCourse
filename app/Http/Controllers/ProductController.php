<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('Products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'price' =>'required'
        ]);

            $product = Product::create([
                'name' => $request->name,
                'color' => $request->color,
                'weight' => $request->weight,
                'price' => $request->price,
                'description' => $request->description
        ]);
//        $product = new Product();
//        $product->name = $request->name;
//        $product->description = $request->description;
//        $product->color = $request->color;
//        $product->price = $request->price;
//        $product->weight = $request->weight;
//        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $product = Product::findOrFail($id);
        return view('Products.show',compact('product'));
        //return view('Products.show',compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('Products.edit',compact('product'));
    }



    public function update(Request $request, $id)
    {
        $product = Product::find($id);
//        $product->name = $request->name;
//        $product->description = $request->description;
//        $product->color = $request->color;
//        $product->price = $request->price;
//        $product->weight = $request->weight;
//        $product->save();
        $product->update([
            'name' => $request->name,
            'color' => $request->color,
            'weight' => $request->weight,
            'price' => $request->price,
            'description' => $request->description
        ]);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product= Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
