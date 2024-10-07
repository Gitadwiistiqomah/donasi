<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaign = Campaign::all();
        return view('pages.campaign.index', compact ('campaign')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.campaign.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Campaign::create($request->all());
        return redirect()->route('admin.campaign.index')->with('success', 'Campaign berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $campaign = Campaign::find($id); //SELECT * FROM siswa Where id = $id
        return view('pages.campaign.show', compact ('campaign'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $campaign = Campaign::find($id);
        return view('pages.campaign.edit', compact ('campaign'));
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

        $campaign = Campaign::find($id);
        $campaign->update($request->all());
        return redirect()->route('admin.campaign.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $campaign = Campaign::find($id);
        // $campaign->delete();
        return redirect()->route('admin.campaign.index');
    }
}
