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
                            <h3 class="card-title">All Student List</h3>
                            <a href="/admin_dash"><button class="float-right btn btn-warning">Dashboard</button></a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                              <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Student ID</th>
                                    <th>Student Email</th>
                                    <th>Details</th>
                                    <th>Delete</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{$student['fname'].' '.$student['lname']}}</td>
                                    <td>{{$student['sid']}}</td>
                                    <td>{{$student['email']}}</td>
                                    <td><a class="btn btn-block btn-success" href="detail_student/{{Crypt::encrypt($student['id'])}}">Details</a></td>
                                    <td><a class="btn btn-block btn-danger" href="delete_student/{{Crypt::encrypt($student['id'])}}">Delete</a></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>     
@endsection