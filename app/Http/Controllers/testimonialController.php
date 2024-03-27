<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class testimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Testimonial::all();
        $all = compact('data');
        return view('admin.testimonial.testimonial')->with($all);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        
        return view('admin.testimonial.addtestimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        if ($request->image && $request->image->isValid()) {
            $fileName = time() . '.' . $request->image->extension();
            $folder = $request->image->storeAs('admin/testimoial', $fileName, 'public');
    
            $testimonial = new Testimonial;
            $testimonial->name = $request->input('name');
            $testimonial->companyName = $request->input('companyName');
            $testimonial->about = $request->input('about');
            $testimonial->image = $folder;
            $testimonial->save();
    
            return redirect()->route('testimonial.index');
        }
    
        // Show error message if the file is not an image or an error occurs during the upload
        Session::flash('error', 'Please upload a valid image file.');
    
        return redirect()->back();




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $value = Testimonial::find($id);
        $all = compact('value');
        return view('admin.testimonial.viewtestimonial')->with($all);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         
       Testimonial::find($id)->delete();
    
        return redirect()->back();
    }
}
