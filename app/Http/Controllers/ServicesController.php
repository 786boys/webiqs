<?php

namespace App\Http\Controllers;
use App\Models\Servise;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Servise::all();
        $data = compact('service');
        return view('admin.servises.all-servises')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
       
        return view('admin.servises.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        
        // $filename = time().".".$req->file('image')->getClientOriginalExtension();
        // $path = 'public/admin/services/'.$filename;
        // $req->file('image')->storeAs($path);
        $service = new Servise;
        $service->servises = $req['servises'];
        $service->title_fst = $req['f_title'];
        $service->description_fst = $req['f_dec'];
        $service->title_sec = $req['sec_title'];
        $service->description_sec = $req['sec_dec'];
        $service->image = "hello";
        $service->meta_title = $req['sec_dec'];
        $service->mete_description = $req['sec_dec'];
        $service->save();
        return redirect()->route('service.index');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        
        $service = Servise::find($id);
        $data = compact('service');
        return view('admin.servises.single')->with($data);
        
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
        Servise::find($id)->delete();
    
        return redirect()->back();

    }
}
