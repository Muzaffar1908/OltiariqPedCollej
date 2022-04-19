<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TextSetting;
use ReturnTypeWillChange;

class TextSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textsettings = TextSetting::all();
        return  view('admin.textsetting.index', compact('textsettings'));
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
            'text_uz' => 'required',
            'text_ru' => 'required',
            'text_en' => 'required',
            'address_uz' => 'required',
            'address_ru' => 'required',
            'address_en' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        TextSetting::create($data);
        session()->flash('message', 'Successfully  created');
        return  redirect()->route('admin.textsetting.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $textsetting = TextSetting::findOrFail($id);
        return  view('admin.textsetting.show', [
           'textsetting' => $textsetting,
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
        $textsetting = TextSetting::findOrFail($id);
        return  view('admin.textsetting.edit', [
           'textsetting' => $textsetting,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TextSetting  $textsetting)
    {
        $data = $request->validate([
            'text_uz' => 'required',
            'text_ru' => 'required',
            'text_en' => 'required',
            'address_uz' => 'required',
            'address_ru' => 'required',
            'address_en' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $textsetting->update($data);
        session()->flash('message', 'Successfully  update');
        return  redirect()->route('admin.textsetting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TextSetting $textsetting )
    {
        $textsetting->delete();
        session()->flash('message', 'Successfully  deleted');
        return  redirect()->route('admin.textsetting.index');
    }
}
