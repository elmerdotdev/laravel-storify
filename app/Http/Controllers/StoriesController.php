<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story;

class StoriesController extends Controller
{
    //
    public function index(){
        $user_id = auth()->user()->id;
        $stories = Story::where('user_id', $user_id)
            ->orderBy('id', 'DESC')
            ->get();

        return view('stories.index', [
            'stories' => $stories
        ]);
    }
}
