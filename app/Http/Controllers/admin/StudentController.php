<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\Classes;
use App\Models\Spp;
use App\Models\User;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classes::all()->sortBy('class_name');
        $spps = Spp::all()->sortBy('year');
        $data = Student::join('classes', 'students.id_class', '=', 'classes.id_class')->join('spps','students.id_spp', '=', 'spps.id_spp')->get();
        return view('admin.student.index', compact('data','classes', 'spps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classes::all()->sortBy('class_name');
        $spps = Spp::all()->sortBy('year');
        return view('admin.student.create', compact('classes', 'spps'));
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
            'nisn' => 'required',
            'nis' => 'required',
            'name' => 'required',
            'class' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'spp' => 'required',

            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required|confirmed',
        ]);
        
        
        $account = User::create([
            'name' => $credential['name'],
            'email' => $credential['email'],
            'username' => $credential['username'],
            'password' => Hash::make($credential['password']),
            'role' => 'siswa',
        ]);

        $store = Student::create([
            'nisn' => $credential['nisn'],
            'nis' => $credential['nis'],
            'name' => $credential['name'],
            'id_class' => $credential['class'],
            'address' => $credential['address'],
            'phone_number' => $credential['phone'],
            'id_spp' => $credential['spp'],
            'id' => $account['id'],
        ]);

        return redirect()->route('admin.student.index')->with('success', 'Berhasil menambahkan data.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Student::where('nisn',$id)->join('classes', 'students.id_class', '=', 'classes.id_class')->join('spps','students.id_spp', '=', 'spps.id_spp')->join('users','students.id', '=', 'users.id')->first();

        return view('admin.student.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classes = Classes::all()->sortBy('class_name');
        $spps = Spp::all()->sortBy('year');
        $data = Student::where('nisn', $id)->join('users','students.id', '=', 'users.id')->first();

        return view('admin.student.edit', compact('data','classes', 'spps'));
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
            'nisn' => 'required',
            'nis' => 'required',
            'name' => 'required',
            'class' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'spp' => 'required',

            'email' => 'required|email',
            'username' => 'required',
        ]);
        
        
        $account = User::where('id', $request->id_account)->update([
            'name' => $credential['name'],
            'email' => $credential['email'],
            'username' => $credential['username'],
            'password' => $credential['nisn'],

        ]);

        $update = Student::where('nisn', $id)->update([
            'nisn' => $credential['nisn'],
            'nis' => $credential['nis'],
            'name' => $credential['name'],
            'id_class' => $credential['class'],
            'address' => $credential['address'],
            'phone_number' => $credential['phone'],
            'id_spp' => $credential['spp'],
        ]);

        return redirect()->route('admin.student.index')->with('success', 'Berhasil mengubah data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Student::destroy($id);
        return redirect()->route('admin.student.index');
    }
}
