<?php

namespace App\Http\Controllers;

use App\Course;
use App\Registration;
use App\TraineeCourse;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class TraineeCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainees=Registration::lists('english_name','id');
        $courses=Course::lists('course_name','id');

        $traineeCourse=TraineeCourse::all()->sortByDesc('id');
        return view('traineeCourse/index',compact('traineeCourse','trainees','courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainees=Registration::lists('english_name','id');
        $courses=Course::lists('course_name','id');

        return view('traineeCourse.create',compact('trainees','courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=Input::all();
        //dd($input);
        foreach($input as $key=>$trainee){
            //return $key;
            if($key=="_token") {
                continue;
            }
            elseif($key=="course_id"){
                continue;
            }
            else {
                $traineeCourse = new TraineeCourse(array(
                    'trainee_id' => $trainee,
                    'course_id' => $request->get('course_id'),
                ));
                $traineeCourse->save();
            }
        }

        return redirect('/traineeCourse')->with('status','successfully inserted');
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
        $trainees=Registration::lists('english_name','id');
        $courses=Course::lists('course_name','id');
        $data = TraineeCourse::whereId($id)->firstOrFail();


        return view('traineeCourse.edit',compact('trainees','courses','data'));
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
        $traineeCourse=TraineeCourse::whereid($id)->firstOrFail();

        $traineeCourse->trainee_id=$request->get('trainee_id');
        $traineeCourse->course_id=$request->get('course_id');
        $traineeCourse->save();
        return redirect('/traineeCourse')->with('status','successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $traineeCourse = TraineeCourse::whereid($id)->firstOrFail();
        $traineeCourse->delete();
        return redirect('/traineeCourse')->with('status', 'The Trainee Course Relation which ID was '.$id.' has been deleted!');

    }
}
