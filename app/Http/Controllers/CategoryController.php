<?php

namespace App\Http\Controllers;


use App\Model\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        view('categories.index',compact('categories'));
    }
}