<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Subject;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __contruct()
     {
         $this ->middleware['isAdmin'];
     }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
        $teachers = teacher::all();
        return view('admin.teachers',compact('subjects' ,'teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate ([
            'profile' => 'required',
            'name' => 'required',
            'position' => 'required',
            'subject_id' => 'required',
        ]);

        $file = $request -> file('profile');
        $filename = uniqid().'_'.$file-> getClientOriginalName();
        $file -> move(public_path().'/profile/teachers/',$filename);

        Teacher::create ([
            'profile' => $filename,
            'name' => $request -> get('name'),
            'position' => $request -> get('position'),
            'subject_id' => $request-> get('subject_id'),
        ]);

        return redirect('admin/teachers') -> with('status' ,"Successfully Inserted");
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
