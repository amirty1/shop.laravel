<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;

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
        return view('dashboard.products.all',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $attributes = Attribute::all();
        $attributeValues = AttributeValue::all();
        return view('dashboard.products.create',compact('categories','attributes','attributeValues'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributeValues = $request->attributeValues;
//        dd($attributeValues);
//         foreach ($attributeValues as $attributeValue){
//             $attrbuteForProduct =  explode('-',$attributeValue);
// //            $attribute_value[] =
//         }
//        dd($attrbuteForProduct);
        $request['user_id'] = auth()->user()->id;

        $data = $request->validate([
            'title' => 'required|min:3',
            'text' => 'required',
            'amount' => 'required',
            'price' => 'required',
            'categories' => 'required',
            'user_id' => 'required',
            'metaTitle' => 'nullable',
            'metaDescription' => 'nullable',
            'image' => 'nullable'
        ]);

        //Image
        if ($request->image){
            $image = $request->image;
            $path = time() . $image->getClientOriginalName();
            $path = str_replace(' ', '-',$path);
            $image->move('storage/products/',$path);
            $path = 'storage/products/'.$path;
        }

        $product = Product::create($data);
        $product->categories()->sync($data['categories']);
        $product->update([
            'image' => $path
        ]);


        $product->attributes();

        $products = Product::all();
        toast()->success('محصول جدید با موفقیت ایجاد شد');
        return view('dashboard.products.all',compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('dashboard.products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title' => 'required|min:3',
            'text' => 'required',
            'amount' => 'required',
            'price' => 'required',
            'categories' => 'required'
        ]);
        $product->update($data);
        $product->categories()->sync($data['categories']);
        $products = Product::all();
        toast()->success('محصول جدید با موفقیت ویرایش شد');
        return view('dashboard.products.all',compact('products'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        toast()->success('محصول جدید با موفقیت حذف شد');
        return back();
    }
}
