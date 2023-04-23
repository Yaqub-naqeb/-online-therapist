<?php

namespace App\Http\Controllers;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    

    public function index() {

        return view('blogs',[
            "Blogs" => Blogs::latest()->filter(request(['search']))->simplepaginate(8)
        ]);
    }

    public function show($id) {
     
            $blog =  Blogs::find($id);
            if($blog) {
                return view('blog',[
                    "blog" =>$blog , 
                    "BlogRecent" => Blogs::latest()->paginate(4)
                ]);
            } else{
                abort("404");
            }          

         }

         public function  create(){
            return view('write');
         }

         public function store(Request $request){
         
            $formFileds = $request ->validate([
                'title' =>'required' ,
                'desc' =>'required' , 
                
            ]);

            if($request->hasFile("image")){
                $formFileds["image"] = $request->file("image")->store("images" , "public");
            }
            $formFileds['user_id'] = 22;
            Blogs::create($formFileds);
        
            return redirect('/blogs')->with("message" , "Blog is Posted successfully");

            
         } 



        }