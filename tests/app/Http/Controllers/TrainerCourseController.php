<?php

namespace App\Http\Controllers;

use App\Course;
use App\TraineeCourse;
use App\Trainer;
use App\TrainerCourse;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TrainerCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainersList=Trainer::lists('name','id');
        $courses=Course::lists('course_name','id');

        $trainers=TrainerCourse::all();
        //dd($trainers);
        return view('TrainerCoursesRelation.index',compact('trainers','trainersList','courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainers=Trainer::lists('name','id');
        $courses=Course::lists('course_name','id');
        return view('TrainerCoursesRelation.create',compact('trainers','courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $trainer_course=new TrainerCourse(
            array(
                'trainer_id'=>$request->get('trainer_rel'),
                'course_id'=>$request->get('course_rel')
            )

        );
        $trainer_course->save();
        return redirect('trainer_course')->with('status','Trainer & Course created successfully');
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
        $trainer_course=TrainerCourse::whereid($id)->firstOrfail();
        $trainers=Trainer::lists('name','id');
        $courses=Course::lists('course_name','id');
        return view('TrainerCoursesRelation.edit',compact('trainer_course','trainers','courses'));
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
        $trainer_course=TrainerCourse::whereid($id)->firstOrFail();;
        //dd($trainer_course);

        $trainer_course->trainer_id=$request->get('trainer_rel');
        $trainer_course->course_id=$request->get('course_rel');
        $trainer_course->save();
        return redirect('/trainer_course')->with('status','Trainer & Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainer_course=TrainerCourse::whereid($id);
        $trainer_course->delete();
        return redirect('/trainer_course')->with('status','Trainer & Course deleted successfully');
    }
}
