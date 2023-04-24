<?php

namespace App\Http\Controllers;
use App\Models\Blogs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    

    public function index() {

        return view('blogs',[
            "Blogs" => Blogs::latest()->filter(request(['search']))->simplepaginate(8)
        ]);
    }

    public function show($id) {
     
            $blog =  Blogs::find($id);
            $user = User::find($blog->user_id);;
            if($blog) {
                return view('blog',[
                    "blog" =>$blog , 
                    "BlogRecent" => Blogs::latest()->paginate(4) , 
                    "user" =>$user
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
            $formFileds['user_id'] = auth()->id();
            Blogs::create($formFileds);
        
            return redirect('/blogs')->with("message" , "Blog is Posted successfully");

            
         } 

         public function  edit(Blogs $blog){
           
            return view('edit' , ['blog'=>$blog]);
         }

         
         public function update(Request $request , Blogs $blog){
         
            $formFileds = $request ->validate([
                'title' =>'required' ,
                'desc' =>'required' , 
            ]);

            if($request->hasFile("image")){
                $formFileds["image"] = $request->file("image")->store("images" , "public");
            }
            $formFileds['user_id'] = auth()->id();
            $blog->update($formFileds);
            return back()->with("message" , "Blog is Updated successfully");

            
         } 

         public function destroy(Blogs $blog){
            $blog->delete();
            return redirect('/blogs')->with("message" , "Blog is Delete successfully");
         }



         public function profile(){
            $user = Auth::user();
$user_blogs = Blogs::where('user_id', $user->id)->get();
            return view('profile' , ["user_blogs"=>$user_blogs , "user"=>$user]);

        }
        }