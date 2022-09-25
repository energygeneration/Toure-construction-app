<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\BlogController;

class BlogController extends Controller
{
    public function create()
    {
        return view('blog');
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'firs_name' => 'required',
        //     'last_name' => 'required',
        //     'image'=>'required',
        //     'message' => 'required',
        //  ]);

        //  $filename = time() . '.' . $request->image->extention();

        //  $path = $request->file('image')->storeAs(
        //     'avatar',
        //     $filename,
        //     'public',
        //  );

    
         $blog = new Blog;
         $blog->first_name = $request->first_name;
         $blog->last_name = $request->last_name;
         $blog->image = $request->image;
         $blog->message = $request->message;
         $blog->save();
        return "C'est bien enregistré !";
    }

    public function show()
    {
    
        $blog=blog::all();
        return view('Blog',compact('blog'));
       
    }
    

}
