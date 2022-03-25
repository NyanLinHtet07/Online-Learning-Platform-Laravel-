<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Chapter;
use App\Exam;


class AdminController extends Controller
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
        $subjects = Subject::all();
        return view('admin.home',compact('subjects')); 
    }

    public function add_question($id)
    {
        $exams = Exam::all()->where('chapter_id',$id);
        $chapter = Chapter::find($id);

        return view('admin.upload.question',compact('chapter','exams'));
    }

    public function add_new_question(Request $request)
    {
         $request ->  validate ([
             'question' => 'required',
             'option1' => 'required',
             'option2' => 'required',
             'option3' => 'required',
             'option4' => 'required',
             'ans' => 'required',
             'chapter_id' => 'required'
     ]);
    
    //         Exam::create ([
    //             'chapter_id' => $request -> get('chapter_id'),
    //             'question' => $request -> get('question'),
    //             'ans' => $request -> get('ans'),
    //             'option' -> $request -> json_encode(array('option1','option2','option3','option4')),


    //         ]);
    //           return redirect()->back() -> with('status' ,"Successfully Inserted");

        // $valiador =Validator::make($Request -> all(), [
        //             'question' => 'required',
        //              'option1' => 'required',
        //             'option2' => 'required',
        //                 'option3' => 'required',
        //                 'option4' => 'required',
        //                 'ans' => 'required',
        //                 'chapter_id' => 'required'
        //  ] );
       
             $question = new Exam();
             $question -> chapter_id = $request -> chapter_id ;
             $question -> question = $request -> question ;
             $question -> ans = $request -> ans ;
              $question -> status = 1 ;
             $question -> options = json_encode(array('option1' => $request->option1, 'option2' => $request->option2, 
                                                'option3' => $request->option3, 'option4' => $request->option4, )) ;
            
                $question->save();
              //  $arr = array('status' => 'true' , 'message' => 'Question Successfully Added', 'reload' => url('admin/add_question/'.$request-> chapter_id));
             return redirect()->back() -> with('status' ,"Successfully Inserted");

      
    }

    public function question_status($id)

    {
        $exma = Exam::where('id',$id) -> get() -> first();
            if ($exma -> status ==1) {
                $status = 0;
             }
             else {
                 $status = 1;
                 $exma1 = Exam::where('id',$id) -> get() -> first();
                 $exma1 -> status -> $status;
                 $exma1 -> update();
             }
    }

    public function delete_question($id)
    {
   
             $question = Exam::find($id);
            $question -> delete();
        //$question = Exam::where('id','$id') -> get()-> first();
        // $chapter_id = $question -> chapter_id;
        // $question -> delete();
       //  return redirect ( url ('admin/add_question/'.$chapter_id ) );
        return redirect()->back();
    }

    public function edit_question($id)
    {
        $question = Exam::find($id);
        return view('admin.edit.question',compact('question'));
    }

    public function update(Request $request ,$id)
    {
        $question = Exam::find($id);
        $question -> question  = $request -> question;
        $question -> ans = $request -> ans;
        $question -> options = json_encode(array('option1' => $request-> option1,'option2' => $request-> option2,
                                                                                'option3' => $request-> option3, 'option4' => $request-> option4));
        
        $question -> update();
      return redirect('admin/add_question/'.$question -> chapter_id); 


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
