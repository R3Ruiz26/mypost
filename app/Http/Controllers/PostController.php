<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
         $pts= Post::orderby('id','desc')->with('categories')->with('users')
         ->get();
         return view('welcome', compact('pts'));

    }

    public function porCategoria($cat)
    {
        $categ= Post::where('id','=', $cat)
        ->with('categories')->with('users')->get();
        return $categ;

    }
}
