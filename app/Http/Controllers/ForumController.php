<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\post;
use Illuminate\Support\Facades\Auth;



class ForumController extends Controller
{
    public function Homepage(Request $req){
        
        if($req -> term){
            $term = $req->term;
            $posts = post::where(
                'title','LIKE',"%{$term}%")->get();
        } else{
            $posts = post::all();
        }
        
        return view('dashboard', compact('posts'));
    }

    public function AddPost(){
        return view('AddPost');
    }
    public function insert(Request $request){

        $username = Auth::user()->name;

        $data = array();
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        $data['username'] = $username;
        $data['created_at'] = Carbon::now();

        DB::table('posts')->insert($data);
        return Redirect('/dashboard');
    }
    public function delete(Request $request){
        $post = post::find($request -> id);
        $post->delete();

        return redirect('dashboard');
    }
    public function user_posts(){
        $username = Auth::user()->name;

        $posts = post::where(
            'username', '=',"{$username}"
        )->get();

        return view('user_posts', compact('posts'));
    }

}
