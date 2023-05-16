<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['owner'] = Owner::all();
        return view('owner.index', $data); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('owner.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $ownerData = request()->except("_token");
        owner::insert($ownerData);
        return redirect()->route('owner.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Owner $owner)
    {
        //
         
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Owner $owner)
    {
        //
        $owners=Owner::findOrFail($id);
        return view('owner.edit', compact('owners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Owner $owner)
    {
        //
        $ownerData = request()->except(['_token', '_method']);
        Owner::where('id', '=', $id)->update($petData);
        return redirect('owner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Owner $owner)
    {
        //
        Owner::destroy($id);
        return redirect('pet');
    }
}
