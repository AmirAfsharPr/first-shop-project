<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.home',[
            'categories' => Category::query()->where('category_id', null)->get(),
            'parent'
        ]);
    }
}
