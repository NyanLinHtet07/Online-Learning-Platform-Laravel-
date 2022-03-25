<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Grade;
use App\Subject;
use App\Chapter;
use App\Lecture;
use App\Exam;
use App\Result;
use App\User;



class StudentController extends Controller
{
      public function __construct()
    {
        $this->middleware('isUser');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subjects = Subject::all();
        return view ('learning.index', compact('subjects'));


    }

    public function learn( Request $request)
    {
        $subjects = Subject::all();
        
        return view('learning.learn', compact('subjects'));
    }

    public function chapter (Request $request ,$id)
    {
        // $chapters = Chapter::all() -> where( [
        //                                                             ['subject_id','=' ,$id],
        //                                                             ['grade_id','=',1],
        //                                                             ] ) -> get();
        $subject = Subject::find($id);
        $chapters = Chapter::where([
                                                                    ['subject_id', '=', $id],
                                                                   ['grade_id', '=', $request -> user()->grade_id],
                                                                ])->get(); 

        return view('learning.chapter' , compact('chapters','subject'));   
    }

    public function lecture( Request $request , $id)
    {
        $chapter = Chapter::find($id);
      
        $lectures = Lecture::where([
                                                                 ['chapter_id', '=', $id],
                                                                   ['grade_id', '=', $request -> user()->grade_id],
                                                                ])->get();

        return view('learning.lecture' , compact('lectures','chapter'));   
    }

    
    public function lecture_detail( Request $request , $id)
    {
        $lecture = Lecture::find($id);
      
       
        return view('learning.lecture_detail' , compact('lecture'));   
    }


    /**
     * 
     * for exam (link with lecture id)
     * 
     */
    
     public function exam($id)
     {
        $chapter = Chapter::find($id);
        $exams = Exam::where('chapter_id', $id) ->get()->toArray();

         return view('learning.exam',compact('chapter','exams'));
     }

     public function submit_question( Request $request )
     {
         $yes_ans = 0;
         $no_ans = 0;
         $data = $request -> all( );
         $result = array();
         for ($i=1; $i <= $request->index ; $i++)
          { 
                if (isset($data['question'.$i ]))
                {
                        $question = Exam::where('id',$data['question'.$i]) ->get()->first();
                        if ($question -> ans == $data['ans' .$i ])
                         {
                           $result[$data['question' . $i]] = 'YES';
                           $yes_ans++;
                        }
                        else 
                            {
                                $result[$data['question' . $i]] = 'NO';
                                $no_ans++;
                            }
                        }    
                }

                $res = new Result();
                $res->chapter_id = $request->chapter_id;
                $res->user_id = $request ->  user()->id;
                $res->yes_ans= $yes_ans;
                $res->no_ans = $no_ans;
                $res->result_json = json_encode($result);
                echo $res->save();

                return redirect ('learning/'.$res->chapter_id.'/lecture');

     }

     public function view_result(Request $request ,$id)
     {
        $results = Result::all()->where('user_id',$id);
        return view('learning.view_result', compact('results'));
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
        //
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
