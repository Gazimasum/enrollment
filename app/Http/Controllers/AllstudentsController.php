<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AllstudentsController extends Controller
{
    public function allstudent(){
        //return view('admin.allstudent');
        $allstudent_info = DB::table('student_tbl')
            ->get();
        $manage_student = view('admin.allstudent')
            ->with('all_student_info',$allstudent_info);
        return view('layout')
            ->with('allstudent',$manage_student);
    }

    // Delete Student

    public function studentdelete($request_id){
        DB::table('student_tbl')
            ->where('student_id',$request_id)
            ->delete();
        return Redirect::to('/allstudent');
    }


    // View student
    public function studentview($student_id){
        $student_description_view = DB::table('student_tbl')
            ->select('*')
            ->where('student_id',$student_id)
            ->first();
//       echo "</pre>";
//       print_r($student_description_view);

        $manage_description_student= view('admin.studentview')
        ->with('student_description_profile',$student_description_view);
        return view('layout')
            ->with('admin.studentview',$manage_description_student);

    }


    // Edit Student

    public function studentedit($student_id){
        $student_description_view = DB::table('student_tbl')
            ->select('*')
            ->where('student_id',$student_id)
            ->first();
//       echo "</pre>";
//       print_r($student_description_view);

        $manage_description_student= view('admin.studentedit')
            ->with('student_description_profile',$student_description_view);
        return view('layout')
            ->with('studentedit',$manage_description_student);

    }

    // Update student heir

    public function studentupdate(Request $request, $student_id){
//        echo "</pre>";
//        print_r($student_id);
        $data =array();
        $data['student_name'] = $request->student_name;
        $data['student_roll'] = $request->student_roll;
        $data['student_fathersname'] = $request->student_fathersname;
        $data['student_mothersname'] = $request->student_mothersname;
        $data['student_email'] = $request->student_email;
        $data['student_password'] = md5($request->student_password);
        $data['student_phone'] = $request->student_phone;
        $data['student_address'] = $request->student_address;
        $data['student_admissionyear'] = $request->student_admissionyear;

        DB::table('student_tbl')
            ->where('student_id',$student_id)
            ->update($data);
        Session::put('exception','Student Update Successfully ');
        return Redirect::to('/allstudent');
    }


}
