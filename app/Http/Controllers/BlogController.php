<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Blog;

class BlogController extends Controller

{
    //

    public function blogIndex() {
        return view('Admin.Blog.index');
    }

    public function blogCreate () {
        return view ('Admin.Blog.create');
    }

    public function blogEdit () {
        return view ('Admin.Blog.edit');
    }


    
}
