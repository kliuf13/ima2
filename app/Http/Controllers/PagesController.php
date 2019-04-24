<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entries;

class PagesController extends Controller
{
    public function index() {
        $meta_data = array (
            'title' => 'Home page',
            'description' => 'This is a page description'
        );
        return view('pages.index')->with($meta_data);
    }

    public function winners() {
        $entries = Entries::where('entryStatus', 'winner')->get();
        return view('pages.winners')->with('entries', $entries);
    }


}
