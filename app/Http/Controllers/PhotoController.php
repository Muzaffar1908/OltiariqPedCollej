<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::paginate(4);
        return view('admin.photo.index', compact('photos'));
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
            'image' => 'required',
        ]);

        if (!file_exists('uploads/photo-image')) {
            mkdir('uploads/photo-image', 0777, true);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ex = $file->getClientOriginalExtension();
            $imageName = md5(rand(100,999999).microtime()) . ".".$ex;
            $file->move(public_path('uploads/photo-image'), $imageName);
            $data['image'] = 'uploads/photo-image/'. $imageName;
        }

        Photo::create($data);
        session()->flash('message', 'Successfully  created');
        return  redirect()->route('admin.photo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photo::findOrFail($id);
        return  view('admin.photo.show', [
            'photo' => $photo,
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
        $photo = Photo::findOrFail($id);
        return  view('admin.photo.edit', [
            'photo' => $photo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        

        if (!file_exists('uploads/photo-image')) {
            mkdir('uploads/photo-image', 0777, true);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ex = $file->getClientOriginalExtension();
            $imageName = md5(rand(100,999999).microtime()) . ".".$ex;
            $file->move(public_path('uploads/photo-image'), $imageName);
            unlink($photo->image);
            $data['image'] = 'uploads/photo-image/'. $imageName;
            $photo->update($data);
        }

        session()->flash('message', 'Successfully  updated');
        return  redirect()->route('admin.photo.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        unlink($photo->image);
        $photo->delete();
        session()->flash('message', 'Successfully  deleted');
        return  redirect()->route('admin.photo.index');
    }
}
