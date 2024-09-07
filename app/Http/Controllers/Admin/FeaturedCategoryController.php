<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeaturedCategoryRequest;
use App\Models\Category;
use App\Models\FeaturedCategory;
use Illuminate\Http\Request;

class FeaturedCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.featuredCategory.create',[
            'featuredCategory' => FeaturedCategory::query()->first(),
            'categories' => Category::query()->where('category_id',null)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(FeaturedCategoryRequest $request)
    {
        FeaturedCategory::query()->delete();

        FeaturedCategory::query()->create([
            'category_id' => $request->get('category_id')
        ]);

        return redirect(route('featuredCategory.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeaturedCategory  $featuredCategory
     * @return \Illuminate\Http\Response
     */
    public function show(FeaturedCategory $featuredCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeaturedCategory  $featuredCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(FeaturedCategory $featuredCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeaturedCategory  $featuredCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeaturedCategory $featuredCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeaturedCategory  $featuredCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeaturedCategory $featuredCategory)
    {
        //
    }
}
