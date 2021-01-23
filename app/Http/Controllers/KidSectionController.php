<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class KidSectionController extends Controller
{
    public function home(){
        return view('kids.home');
    }
    public function stories(){
        return view('kids.stories', [
            'stories' => Story::all(),
        ]);
    }

    public function story($id){
        $story =  Story::findOrFail($id);
        return view('kids.story', [
            'story' => $story,
        ]);
    }

    public function paints(){
        return view('kids.paints');
    }
}
