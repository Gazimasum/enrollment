@extends('layout')

@php
  function convert_department ($value){
  $values = [
         1=>'SWE',
         2=>'CSE',
         3=>'BBA',
         4=>'EEE',
         5=>'ENG',

  ];
  return $values[$value];

  }
@endphp
@section('content')


    <div class="content-wrapper">
        <h1 class="page-title">User Profile</h1>
        <div class="row user-profile">
            <div class="col-lg-6 side-left">
                <div class="card mb-6">
                    <div class="card-body avatar">
                        <h2 class="card-title">Info</h2>
                        <td><img src="{{URL :: to($student_description_profile->student_image)}}" height="80" width="100" style="border-radius: 50%"></td>
                        <p class="name">{{$student_description_profile->student_name}}</p>
                        <p class="designation">-  {{$student_description_profile->student_roll}}  -</p>
                        <a class="email" href="#">{{$student_description_profile->student_email}}</a>
                        <a class="number" href="#">{{$student_description_profile->student_phone}}</a>
                    </div>
                </div>
                <div class="card mb-6">
                    <div class="card-body overview">
                        {{-- <ul class="achivements">
                            <li><p>34</p><p>Projects</p></li>
                            <li><p>23</p><p>Task</p></li>
                            <li><p>29</p><p>Completed</p></li>
                        </ul> --}}
                        <div class="wrapper about-user">
                            <h2 class="card-title mt-4 mb-3">About</h2>
                            <p>The total information of this student are given below </p>
                        </div>
                        <div class="info-links">
                            <a class="website" >
                                <i class="icon-globe icon">Fathers Name :: </i>
                                <span>{{$student_description_profile->student_fathersname}}</span>
                            </a>
                            <a class="website" >
                                <i class="icon-globe icon">Mothers Name :: </i>
                                <span>{{$student_description_profile->student_mothersname}}</span>
                            </a>
                            <a class="website" >
                                <i class="icon-globe icon">Address :: </i>
                                <span>{{$student_description_profile->student_address}}</span>
                            </a>
                            <a class="website" >
                                <i class="icon-globe icon">Department :: </i>
                                <span>{{convert_department($student_description_profile->student_department)}}</span>
                            </a>
                            <a class="website" >
                                <i class="icon-globe icon">Admission Year :: </i>
                                <span>{{$student_description_profile->student_admissionyear}}</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


 @endsection