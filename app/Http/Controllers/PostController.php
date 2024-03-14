<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;   
class PostController extends Controller
{

    public function create(Request $request)
    {
       return view('admin.blog-post');
    }

   
    public function store(Request $req)
    {
        // print_r($req->all());
        $fileName = time() . '.' . $req->img->extension();
        $folder = $req->img->storeAs('public/admin/asset/blog-pic', $fileName);

        if($req->has('pic')){
            $file=$req->pic ;   
            $extension = $file->getClentOrignalExtension();
            $fileName = time() .'.'.extension();
            $path  = 'public/admin/asset/blog-pic';
            $file->move($path, $fileName);
        }

        $insert = DB::table('post')->insert(
            [
                'title'=> $req->title,  
                'description'=> $req->description,  
                'img'=> $req->$path.$fileName,
                'meta-t'=> $req->metaTitle,
                'meta-d'=> $req->metaDescription,
                'create-by'=> $req->upload,
                'tags'=> $req->tags
            ]
        );
  
        
        
    }

    public function show()
    {
        $fetch = DB::table('post')->get();
     return($fetch );

   
   
    }
}