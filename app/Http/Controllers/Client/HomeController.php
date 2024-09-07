<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\FeaturedCategory;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.home',[
            'sliders' => Slider::all(),
            'featuredCategory' => FeaturedCategory::getCategory()
        ]);
    }


}
