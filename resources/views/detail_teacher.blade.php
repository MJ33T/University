@extends('master')
@section('master')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Details of {{$teacher['fname'].' '.$teacher['lname']}}</h3>
                            <a href="/teacher_list"><button class="float-right btn btn-warning">Back</button></a>
                            
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h1>Fullname: {{$teacher['fname'].' '.$teacher['lname']}}</h1>
                                    <br>
                                    <h4>ID: {{$teacher['tid']}}</h4>
                                    <br>
                                    <h4>Email: {{$teacher['email']}}</h4>
                                    <br>
                                    <h4>Present Address: {{$teacher['paddress']}}</h4>
                                    <br>
                                    <h4>Permanent Address: {{$teacher['peraddress']}}</h4>
                                    <br>
                                    <h4>Date of Birth: {{$teacher['dob']}}</h4>
                                    <br>
                                    <h4>Gender: {{$teacher['gender']}}</h4>
                                    <br>
                                    <a class="btn btn-block btn-warning" href="update_teacher/{{Crypt::encrypt($teacher['id'])}}">Update</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>     
@endsection