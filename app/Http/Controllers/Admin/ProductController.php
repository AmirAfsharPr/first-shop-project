<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
       return view('admin.products.index', [
           'products' => Product::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.products.create', [
            'categories' => Category::all(),
            'brands' => Brand::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ProductRequest $request)
    {
        $path = $request->file('image')->storeAs(
            'public/products', $request->file('image')->getClientOriginalName()
        );

        Product::query()->create([
            'name' => $request->get('name'),
            'slug' => $request->get('slug'),
            'brand_id' => $request->get('brand_id'),
            'category_id' => $request->get('category_id'),
            'cost' => $request->get('cost'),
            'description' => $request->get('description'),
            'image' => $path,
        ]);

        return redirect(route('products.index'));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'product' => $product,
            'categories' => Category::all(),
            'brands' => Brand::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {

        $path = $product->image;



        if ($request->hasFile('image')){
            $path = $request->file('image')->storeAs(
                'public/products', $request->file('image')->getClientOriginalName()
            );
        }

        $slugIsUsed = Product::query()
            ->where('slug', $request->get('slug'))
            ->where('id', '!=', $product->id)
            ->exists();

        if ($slugIsUsed){
            return back()->withErrors(['slug' => 'slug already been taken']);
        }

        $product->update([
            'name' => $request->get('name' , $product->name),
            'slug' => $request->get('slug', $product->slug),
            'brand_id' => $request->get('brand_id', $product->brand_id),
            'category_id' => $request->get('category_id', $product->category_id),
            'cost' => $request->get('cost', $product->cost),
            'description' => $request->get('description', $product->description),
            'image' => $path,
        ]);

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('products.index'));
    }
}
