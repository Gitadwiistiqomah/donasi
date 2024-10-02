<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        return view('pages.categories.index', compact ('categories')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $categories = Categories::create($request->all());
        // return redirect()->route('categories.index'); 

        Categories::create($request->all());

        return redirect()->route('admin.categories.index')->with('success', 'Categories berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $categories = Categories::find($id); //SELECT * FROM siswa Where id = $id
        return view('pages.categories.show', compact ('categories'));
    //     $categories = Categories::create($request->all());
    //    return redirect()->route('pages.categories.index'); 
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Categories::find($id);
        return view('pages.categories.edit', compact ('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:128',
        ], [
            'name.required' => 'Name harus diisi.',
            
        ]);

        $categories = Categories::find($id);
        $categories->update($request->all());
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $categories = Categories::find($id);
        $categories->delete();
        return redirect()->route('admin.categories.index');
    }
}
