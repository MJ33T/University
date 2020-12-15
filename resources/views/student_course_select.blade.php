@extends('stumaster')
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
                            <h3 class="card-title">Enroll Course</h3>
                            <a href="/student_dash"><button class="float-right btn btn-warning">Dashboard</button></a>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>Semister</th>
                                <th>Enroll</th>
                              </tr>
                              </thead>
                              <tbody>
                                @foreach ($results as $result)
                                <tr>
                                    <td>{{$result['course_code']}}</td>
                                    <td>{{$result['course_name']}}</td>
                                    <td>{{$result['semister']}}</td>
                                    <td><a class="btn btn-block btn-primary" href="student_course_select/{{Crypt::encrypt($result['id'])}}">Enroll</a></td>
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