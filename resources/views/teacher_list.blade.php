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
                            <h3 class="card-title">All Teachers List</h3>
                            <a href="/admin_dash"><button class="float-right btn btn-warning">Dashboard</button></a>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th>Teacher Name</th>
                                <th>Teacher ID</th>
                                <th>Teacher Email</th>
                                <th>Details</th>
                                <th>Delete</th>
                              </tr>
                              </thead>
                              <tbody>
                                @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{$teacher['fname'].' '.$teacher['lname']}}</td>
                                    <td>{{$teacher['tid']}}</td>
                                    <td>{{$teacher['email']}}</td>
                                    <td><a class="btn btn-block btn-success" href="detail_teacher/{{Crypt::encrypt($teacher['id'])}}">Details</a></td>
                                    <td><a class="btn btn-block btn-danger" href="delete_teacher/{{Crypt::encrypt($teacher['id'])}}">Delete</a></td>
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