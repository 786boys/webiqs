<?php

namespace App\Http\Controllers;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $value = Portfolio::all();
        $values = compact('value');
        return view('admin.portfolio.allportfolio')->with($values);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.portfolio.addportfolio');
    }

    /** 
     * Store a newly created resource in storage.
     */
   
    public function store(Request $request)
    {
    // Check if the uploaded file is an image
    if ($request->image && $request->image->isValid()) {
        $fileName = time() . '.' . $request->image->extension();
        $folder = $request->image->storeAs('admin/portfolio', $fileName, 'public');

        $portfolio = new Portfolio;
        $portfolio->name = $request->input('Pname');
        $portfolio->about = $request->input('about');
        $portfolio->img = $folder;
        $portfolio->solution = $request->input('solution');
        $portfolio->type = $request->input('type');

        $portfolio->save();

        return redirect()->route('portfolio.index');
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
        $value = Portfolio::find($id);
        $values = compact('value');
        return view('admin.portfolio.view')->with($values); 
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
    $request->validate([
        'Pname' => 'required|string',
        'about' => 'required|string',
        'solution' => 'required|string',
        'type' => 'required|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $fileName = time() . '.' . $request->image->extension();
        $folder = $request->image->storeAs('admin/portfolio', $fileName, 'public');

        $portfolio->img = $folder;
    }

    $portfolio->name = $request->input('Pname');
    $portfolio->about = $request->input('about');
    $portfolio->solution = $request->input('solution');
    $portfolio->type = $request->input('type');

    $portfolio->save();

    Session::flash('success', 'Portfolio updated successfully.');

    return redirect()->route('portfolio.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        Portfolio::find($id)->delete();
    
        return redirect()->back();
    }
}
