<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
    
        return view('dashboard.products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        $data->validate([
            'name' => 'required',
            'description'=>'required',
            'stock'=>'required',
            'price' => 'required',
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $data->all();
        
  
        if ($image = $data->file('image')) {
            $destinationPath = 'image/';
            $productImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $productImage);
            $input['image'] = "$productImage";
        }
        Product::create($input);
        
    
        return redirect()->route('products.index')
                        ->with('success','Usuario Actualizado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.edit',compact('product'));return view('dashboard.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data, $id)
    {
        $data->validate([
            'id'=> 'required',
            'name' => 'required',
            'description'=>'required',
            'stock'=>'required',
            'price' => 'required',
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $product = Product::find($id);
        $input = $data->all();
        
  
        if ($image = $data->file('image')) {
            $destinationPath = 'image/';
            $productImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $productImage);
            $input['image'] = "$productImage";
        }else{
            unset($input['image']);
        }
        $product->update($input);
        
    
        return redirect()->route('products.index')
                        ->with('success','Usuario Actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $message = ['Producto eliminado correctamente', 'Error al eliminar'];
        if($product->delete()){
        return redirect()->to('products')->with('success', $message[0]);
        }
        else{
        return redirect()->to('products')->with('error' ,$message[1]);
        }
    }
}
