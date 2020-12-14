@extends('tecmaster')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Course List</h3>
                            <a href="/admin_dash"><button class="float-right btn btn-warning">Dashboard</button></a>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>Semister</th>
                                <th>Students</th>
                              </tr>
                              </thead>
                              <tbody>
                                @foreach ($links as $link)
                                <tr>
                                    <td>{{$link['course_code']}}</td>
                                    <td>{{$link['course_name']}}</td>
                                    <td>{{$link['semister']}}</td>
                                    <td><a class="btn btn-block btn-success" href="enroll_course_student/{{Crypt::encrypt($link['id'])}}">Students</a></td>
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