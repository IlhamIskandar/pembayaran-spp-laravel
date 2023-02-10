<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;


class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Classes::all();

        return view('admin.class.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.class.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credential = $request->validate([
            'classname' => 'required',
            'competency' => 'required'
        ]);

        $store = Classes::create([
            'class_name' => $credential['classname'],
            'competency' => $credential['competency']
        ]);

        return redirect()->route('admin.class.index')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Classes::find($id);

        return view('admin.class.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $credential = $request->validate([
            'classname' => 'required',
            'competency' => 'required'
        ]);

        $store = Classes::where('id_class', $id)->update([
            'class_name' => $credential['classname'],
            'competency' => $credential['competency']
        ]);

        return redirect()->route('admin.class.index')->with('success', 'Berhasil Mengubah Data');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Classes::destroy($id);

        return redirect()->route('admin.class.index')->with('success', 'Berhasil Menghapus Data');
    }
}
