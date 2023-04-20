<?php

namespace App\Http\Controllers;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    

    public function index() {

        return view('blogs',[
            "Blogs" => Blogs::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show($id) {
     
            $blog =  Blogs::find($id);
            if($blog) {
                return view('blog',[
                    "blog" =>$blog
                ]);
            } else{
                abort("404");
            }          

         }

        }