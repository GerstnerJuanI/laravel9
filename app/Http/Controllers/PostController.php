<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['title' => '1er post'],
            ['title' => '2do post'],
            ['title' => '3ro post'],
            ['title' => '4to post']
        ];
        return view('blog',['posts' => $posts]);    
    }
    
}
