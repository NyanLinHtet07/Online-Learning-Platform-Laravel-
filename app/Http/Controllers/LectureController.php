<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapter;
use App\Teacher;
use App\Grade;
use App\Subject;
use App\Lecture;

class LectureController extends Controller
{

     public function __construct()
     {
         $this->middleware('isAdmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $chapter = Chapter::find($id);
        $lectures = Lecture::all()->where('chapter_id', $id);

        return view('admin.upload.lecture',compact('chapter','lectures'));
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
                'video' => 'required',
                'lession' => 'required',
                'name' => 'required',
                'description' => 'required',
                'chapter_id' => 'required',
                'grade_id' => 'required',
        ]);

        // $files = $request -> file('video');
        // $fileAry = array();

        // foreach ($files as $file) {
        //     $filename = uniqid().'_'.$file -> getClientOriginalName();
        //     $file -> move(public_path().'/videos/lectures/',$filename);
        // }
         $file = $request->file('video');
        $filename = uniqid().'_'.$file -> getClientOriginalName();
        $file -> move(public_path().'/videos/lectures/',$filename);

        Lecture::create([
                'video' => $filename,
                'lession' => $request->get('lession'),
                'name' => $request->get('name'),
                'description' => $request -> get('description'),
                'chapter_id' => $request-> get('chapter_id'),
                'grade_id' => $request -> get('grade_id'),
        ]);

          return redirect()->back() -> with('status' ,"Successfully Inserted");

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
        $lession = Lecture::find($id);
         return view('admin.edit.lecture',compact('lession'));
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
            Lecture::find($id) -> update([
                'lession' => $request -> lession,
                'name' => $request -> name,
                'description' => $request -> description

            ]);

                return view('admin.home') ;
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
