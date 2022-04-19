<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socialmedias = SocialMedia::all();
        return  view('admin.socialmedia.index', compact('socialmedias')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'icon' => 'required',
            'url' => 'required',
        ]);

        SocialMedia::create($data);
        session()->flash('message', 'Successfully  created');
        return  redirect()->route('admin.socialmedia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $socialmedia = SocialMedia::findOrFail($id);
        return  view('admin.socialmedia.show', [
            'socialmedia' => $socialmedia,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $socialmedia = SocialMedia::findOrFail($id);
        return  view('admin.socialmedia.edit', [
            'socialmedia' => $socialmedia,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialMedia  $socialmedia)
    {
        $data = $request->validate([
            'icon' => 'required',
            'url' => 'required',
        ]);

        $socialmedia->update($data);
        session()->flash('message', 'Successfully  update');
        return redirect()->route('admin.socialmedia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMedia $socialmedia)
    {
        $socialmedia->delete();
        session()->flash('message', 'Successfully  delete');
        return  redirect()->route('admin.socialmedia.index');
    }
}
