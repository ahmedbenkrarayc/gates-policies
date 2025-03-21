<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.list', compact('posts'));
    }

    public function destroy($id){
        $post = Post::findOrFail($id);
        // if(Gate::denies('delete-post', $post)){
        //     abort(403, 'you have no permission');
        // }
        // $this->authorize('delete', $post);
        if(Gate::denies('delete', [$post, 'admin'])){
            abort(403, 'you have no permission');
        }
        dd('deleted post : '.$id);
        // $post->delete();
        return back();
    }
}
