<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    function create()
    {
        return view('Products.create');
    }
    function store(Request $request)
      {
         // Form validation
         $request->validate
         (
         [
            'price'=>'required|numeric',
            'stock'=>'required|numeric|min:0',            
         ]
         );
         $od = $request -> all();
         array_shift($od);
         Product::create($od);
         return redirect()->route('Products.index');

      }
    function index()
    {
        $data = Product::all();
        // $data = Employee::where('phone','>',50)->orderby('name')->get();
        // $data = Employee::paginate(1);

        return view('Products.index',compact('data'));
    }
    function show($id)
    {
        $product = Product::find($id);
        return view('Products.show',compact('product'));


    }
    function destroy(Request $request,$id)
    {
       try
       {
           $products = Product::find($id);
           if($products-> delete())
           {
              request()->session()->flash('success','Product Deleted Successfully!!');
           }
           else
           {
            request()->session()->flash('error','Product Deleted Failed');
           }

       }
       catch(Exception $exception)
       {
          request()->session()->flash('error','Error:'.$exception->getMessage());
       }
       return redirect()->route('Products.index');
    }
    function edit($id)
    {
       try
       {
           $products = Product::find($id);
           if(!$products)
           {
              request()->session()->flash('error','Error:Invalid Request');
              return redirect()->route('Products.index');
           }
       }
       catch(Exception $exception)
       {
          request()->session()->flash('error','Error:'.$exception->getMessage());
       }
       return view('Products.edit',compact('products'));
    }

    function update(Request $request,$id)
    {
       try
       {
           $products = Product::find($id);
           if(!$products)
           {
              request()->session()->flash('error','Error:Invalid Request');
              return redirect()->route('Products.index');
           }
           if($products->update($request->all()))
           {
            request()->session()->flash('success','Updated');
            
           }else
           {
            request()->session()->flash('error','Updated failed');
           }

         }
       catch(Exception $exception)
       {
          request()->session()->flash('error','Error:'.$exception->getMessage());
       }
       return redirect()->route('Products.index');
    }
}

        


