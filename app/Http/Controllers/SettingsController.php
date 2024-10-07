<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Settings::all();
        return view('pages.settings.index', compact ('settings')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Settings::create($request->all());
        return redirect()->route('admin.settings.index')->with('success', 'Settings berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $settings = Settings::find($id); //SELECT * FROM siswa Where id = $id
        return view('pages.settings.show', compact ('settings'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Settings $settings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Settings $settings)
    {
        //
    }
}
