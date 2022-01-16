<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\post;
use Illuminate\Support\Facades\Auth;



class ForumController extends Controller
{
    public function Homepage(){
        $posts = post::all();


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

}
