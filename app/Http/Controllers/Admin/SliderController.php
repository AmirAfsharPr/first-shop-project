<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Brand;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.sliders.index',[
            'sliders'=>slider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(SliderRequest $request)
    {

        $path = $request->file('image')->storeAs('public/sliders' , $request->file('image')->getClientOriginalName());

        Slider::query()->create([
            'subtitle' => $request->get('subtitle'),
            'title' => $request->get('title'),
            'text' => $request->get('text'),
            'link' => $request->get('link'),
            'image' => $path
        ]);

        return redirect(route('sliders.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(slider $slider)
    {
        return view('admin.sliders.edit',[
            'slider'=>$slider
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, slider $slider)
    {
        $this->validate($request,[
            'subtitle' => ['required','string'],
            'title' => ['required','string'],
            'text' => ['required','string'],
            'link' => ['required'],
        ]);

        $path = $slider->image;

        if ($request->hasFile('image')){
            $path = $request->file('image')->storeAs(
                'public/sliders', $request->file('image')->getClientOriginalName()
            );
        }


        $slider->update([
            'subtitle' => $request->get('subtitle'),
            'title' => $request->get('title'),
            'text' => $request->get('text'),
            'link' => $request->get('link'),
            'image' => $path
        ]);
        return redirect(route('sliders.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(slider $slider)
    {
        Storage::delete($slider->image);

        $slider->delete();

        return redirect(route('sliders.index'));
    }
}
