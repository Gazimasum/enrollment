@extends('layout')
@section('content')


    <!-- partial -->
    <div class="content-wrapper">
        <h1 class="page-title">Basic elements</h1>
        <div class="row">
            <div class="col-12 col-lg-6 grid-margin">
                <div class="card">
                    <div class="card-body">



                        <form class="forms-sample" method="post" action="{{ URL:: to('/update_student',$student_description_profile->student_id) }}"  >
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Name</label>
                                <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp"
                                     value="{{($student_description_profile->student_name)}}">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Roll</label>
                                <input type="text" class="form-control p-input" name="student_roll" aria-describedby="emailHelp"
                                       value="{{($student_description_profile->student_roll)}}">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Fathers Name</label>
                                <input type="text" class="form-control p-input" name="student_fathersname" aria-describedby="emailHelp"
                                       value="{{($student_description_profile->student_fathersname)}}">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Mothers Name</label>
                                <input type="text" class="form-control p-input" name="student_mothersname" aria-describedby="emailHelp"
                                       value="{{($student_description_profile->student_mothersname)}}">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Email</label>
                                <input type="email" class="form-control p-input" name="student_email" aria-describedby="emailHelp"
                                       value="{{($student_description_profile->student_email)}}">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control p-input" name="student_password" aria-describedby="emailHelp"
                                       value="{{($student_description_profile->student_password)}}">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Phone Number</label>
                                <input type="text" class="form-control p-input" name="student_phone" aria-describedby="emailHelp"
                                       value="{{($student_description_profile->student_phone)}}">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Address</label>
                                <input type="text" class="form-control p-input" name="student_address" aria-describedby="emailHelp"
                                       value="{{($student_description_profile->student_address)}}">

                            </div>



                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Admission Year</label>
                                <input type="date" class="form-control p-input" name="student_admissionyear" aria-describedby="emailHelp"
                                       value="{{($student_description_profile->student_admissionyear)}}">

                            </div>


                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>










@endsection