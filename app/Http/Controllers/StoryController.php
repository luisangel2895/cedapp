<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.story.index', [
            'stories' => Story::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.story.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $this -> validateData($request);
        $story = new Story();
        $this -> stackData($story, $validData, $request);
        return redirect('/stories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story)
    {
        return view('auth.story.show', [
            'story' => $story,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $story =  Story::findOrFail($id);
        return view('auth.story.edit', [
            'story' => $story
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validData = $this -> validateData($request);
        $story = Story::findOrFail($id);
        $this -> stackData($story, $validData, $request);
        return redirect('/stories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $story = Story::findOrFail($id);
        $story->delete();

        return redirect('/stories');
    }

    /**
     * Validate a Request received with 'validate' of laravel.
     *
     * @param  Request $request
     * @return array
     */
    private function validateData(Request $request) {
        $validData = $request->validate([
            'title' => 'required',
            'story' => 'required',
            'image' => 'required',
        ]);
        return $validData;
    }

    /**
     * Stack a object 'Story' and save it in the db.
     *
     * @param  Story $story
     * @param  array $validData
     * @param  Request $request
     */
    private function stackData(Story $story, array $validData, Request $request){

        $image = $request -> file('image');
        $story->title = $validData['title'];
        $story->story = $validData['story'];
        $story->image = $image -> store('stories', 'public');
        $story->author = $_SESSION['name'];
        $story->save();
    }

}
