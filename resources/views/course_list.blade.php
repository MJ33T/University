
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
                            <h3 class="card-title">All Courses List</h3>
                            <a href="/admin_dash"><button class="float-right btn btn-warning">Dashboard</button></a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                              <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Department</th>
                                    <th>Semister</th>
                                    <th>Delete</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($data as $course)
                                <tr>
                                    <td>{{$course['cname']}}</td>
                                    <td>{{$course['department']}}</td>
                                    <td>{{$course['semister']}}</td>
                                    <td><a class="btn btn-block btn-danger" href="delete_course/{{Crypt::encrypt($course['id'])}}">Delete</a></td>
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