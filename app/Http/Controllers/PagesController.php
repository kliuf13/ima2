<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $meta_data = array (
            'title' => 'Home page',
            'description' => 'This is a page description'
        );
        return view('pages.index')->with($meta_data);
    }

    public function enter() {
        $meta_data = array (
            'title' => 'Entries page',
            'description' => 'This is a page description'
        );
        return view('pages.enter')->with($meta_data);
    }

}
