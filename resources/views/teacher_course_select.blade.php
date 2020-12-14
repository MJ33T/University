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
                            <h3 class="card-title">Select Course</h3>
                            <a href="/admin_dash"><button class="float-right btn btn-warning">Dashboard</button></a> 
                        </div>
                        <form action="/teacher_course_select" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Select Semister</label>
                                            <select name="sem" class="form-control">
                                                <option value="spring">Spring</option>
                                                <option value="summer">Summer</option>
                                                <option value="fall">Fall</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Year</label>
                                            <input class="form-control" type="text" name="year" placeholder="Enter Year">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Course</label>
                                            <select name="course" class="form-control">
                                                @foreach ($courses as $course)
                                                <option value="{{$course['cname']}}">{{$course['cname']}}</option>    
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Enroll</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>     
@endsection