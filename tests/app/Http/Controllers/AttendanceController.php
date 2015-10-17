<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AttendanceFormRequest;
use App\Attendance;
use App\Course;
use App\Info;
use Illuminate\Support\Facades\Input;
use DB;
class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  



    
    /*public function view_attendance(AttendanceFormRequest $request)
    {
         
    $trainee_attendances = Attendance::whereCourse_id($course_id)->lists('trainee_attendance');
    $present = Attendance::whereCourse_id($course_id)->where("trainee_attendance","P")->count('trainee_attendance');
    //return $present;
     $absent = Attendance::whereCourse_id($course_id)->where("trainee_attendance","A")->count('trainee_attendance');
    //return $absent;
    $course_id = $request->get('course_id');   
    $course_name = $this->course_name_by_course_id($course_id);
    $session = $request->get('session');
    $date = $request->get('date');
    return view('attendances.attendance_show')
       
        ->with('date', $date)
        ->with('session', $session)
        ->with('course_name', $course_name)
        ->with('course_id', $course_id)
        ->with('present', $present) 
        ->with('absent', $absent);


    }*/

    public function attendance_info(){
         $courses = Course::all();
         return view('attendances.show_attendance_info',compact('courses'));
    }

    public function get_attendance_info(AttendanceFormRequest $request){
        $course_id=$request->get('course_id');
        //return var_dump($course_id);
        $session_name=$request->get('session');
        $date=$request->get('date');
        $Info=Attendance::whereCourse_id($course_id)->whereSession_name($session_name)->get();
        return $Info;

    }

    public function preform_fill()
    {
      
        $courses = Course::all();
   
       // $attendances = Attendance::all();
        //$infos = Info::all();
       
        return view('attendances.preform_fill', compact('courses','infos'))->with('trainings', 'active');    
    }


    public function store_attendance(AttendanceFormRequest $request)
    {
         
    $course_id = $request->get('course_id');     

    $trainee_ids=Info::whereCourse_id($course_id)->lists('trainee_id');     
    $day = $request->get('date');

     $trainee_ids=Info::whereCourse_id($course_id)->lists('trainee_id');     
     $day = $request->get('date');

    $session_name = $request->get('session');     
     foreach ($trainee_ids as $trainee_id) {           
        $attendance = new Attendance();
         $attendance->day = $day;
         $attendance->trainee_id = $trainee_id;
         $attendance->session_name = $session_name;
         $attendance->course_id = $course_id;

         $attendance->trainee_attendance = $request->get('ta__'.$trainee_id); 
        $attendance->save();
      
        

         $attendance->trainee_attendance = $request->get('ta__'.$trainee_id);         
        $attendance->save();
     
//new code
      $trainee_attendances = Attendance::whereCourse_id($course_id)->lists('trainee_attendance');
    return $trainee_attendances;
    $collection = collect($trainee_attendances);
   // return $collection->count(); 
    


     }

    //new code
  $trainee_attendances = Attendance::whereCourse_id($course_id)->lists('trainee_attendance');
    $present = Attendance::whereCourse_id($course_id)
                
               
                ->where("trainee_attendance","P")->count('trainee_attendance');
    //return $present;
     $absent = Attendance::whereCourse_id($course_id)->where("trainee_attendance","A")->count('trainee_attendance');
    //return $absent;
    
    $course_name = $this->course_name_by_course_id($course_id);
    $session = $request->get('session');
    $date = $request->get('date');
    return view('attendances.attendance_show')
       
        ->with('date', $date)
        ->with('session', $session)
        ->with('course_name', $course_name)
        ->with('course_id', $course_id)
        ->with('present', $present) 
        ->with('absent', $absent);

   // $collection = collect($trainee_attendances);
   
   


                
   // return redirect('/attendance_show');
    }



    
    public function course_name_by_course_id($id){
        return Course::findOrFail($id)->course_name;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_attendance_form_function(AttendanceFormRequest $request)
    {   

        $course_id = $request->get('course_id');
        $date = $request->get('date');
        $session = $request->get('session');
        $trainee_list = Info::whereCourse_id($course_id)->get();
        $course_name = $this->course_name_by_course_id($course_id);
        return view('attendances.attendance_create')
        ->with('trainee_list', $trainee_list)
        ->with('date', $date)
        ->with('session', $session)
        ->with('course_name', $course_name)
        ->with('course_id', $course_id) ;



        $present = Course::whereCourse_id($course_id)->where("trainee_attendance","P")->count("trainee_attendance"); 
        return $present;
        $absent = Course::whereCourse_id($course_id)->where("trainee_attendance","A")->count("trainee_attendance");    



         /*$attendance = new Attendance(array(
        'day' => $request->get('date'),
        'session_name' => $request->get('session'),

        //'trainee_attendance' => $request->get('attendance'),
       
       
         ));
    $attendance->save();*/

    

    }

    public function show_attendance(){

        return 'show_attendance';
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
