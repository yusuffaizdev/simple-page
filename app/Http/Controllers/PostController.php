<?php

namespace App\Http\Controllers;

use App\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    public function index()
    {
        return view('pages.post');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        try {

            $post = new Post();
            $post->title = $request->title;
            $post->description = $request->description;
            $post->user_id = Auth::user()->id;
            $post->save();

            return redirect(route('home'));

        } catch(\Exception $exception) {
            dd($exception);
        }
    }

    public function edit($id){

        $post = Post::find($id);

        return view('pages.post-edit',compact('post'));

    }

    public function update(Request $request,Post $post)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        try {

            $post->title = $request->title;
            $post->description = $request->description;
            $post->user_id = Auth::user()->id;
            $post->save();

            return redirect(route('home'));

        } catch(\Exception $exception) {
            dd($exception);
        }
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect(route('home'));
    }

}
