<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Grade;
use App\Teacher;
use App\Chapter;
use App\OrderUser;

class ChapterController extends Controller
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
        $allsubjects = Subject::all();
        return view('admin.upload.chapter',compact('allsubjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create( Request $request, $id) 
     {
         $subject = Subject::find($id);
         $teachers = Teacher::all()->where('subject_id', $id);
         $grades = Grade::all();
         $chapters10 = Chapter::all()->where(  'subject_id',$id );
         $order = OrderUser::where( [
                                                        ['chapter_id','=',$id],
                                                        ['user_id', '=' ,$request->user()->id],
         ]);
                                                                    
       //   $chapters11 = Chapter::all()->where('subject_id',$id && 'grade_id','2');

         return view('admin.upload.chapter_details',compact('subject','grades','teachers','chapters10','order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    
    {
        $request -> validate ([
            'cover' => 'required',
            'chapter' => 'required',
            'name' => 'required',
            'description' => 'required',
            'subject_id' => 'required',
            'teacher_id' => 'required',
            'grade_id' => 'required',
        ]);

        $file = $request->file('cover');
        $filename = uniqid().'_'.$file -> getClientOriginalName();
        $file -> move(public_path().'/images/subjects/chapter/',$filename);

        Chapter::create([
            'cover' => $filename,
            'name' => $request -> get('name'),
            'chapter' => $request -> get('chapter'),
            'description' => $request -> get('description'),
            'subject_id' => $request -> get('subject_id'),
            'teacher_id' => $request -> get('teacher_id'),
            'grade_id' => $request-> get('grade_id'),
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
