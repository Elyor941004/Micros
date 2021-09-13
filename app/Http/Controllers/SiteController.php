<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Category;


class SiteController extends Controller
{
    public function index()
    {
    	$models = Content::all();
    	$category = Category::all();
    	return view('index', ['models'=>$models, 'categorys'=>$category]);
    }
}
