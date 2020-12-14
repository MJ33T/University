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
                            <h3 class="card-title">Add New Course</h3>
                            <a href="/admin_dash"><button class="float-right btn btn-warning">Dashboard</button></a> 
                        </div>
                        <form action="/add_course" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Course Name</label>
                                            <input type="text" class="form-control" name="cname" placeholder="Enter Course Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Course Code</label>
                                            <input type="text" class="form-control" name="ccode" placeholder="Enter Course Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Department</label>
                                            <select name="department" class="form-control">
                                                <option selected="selected" value="Computer Science & Engineering">Computer Science & Engineering</option>
                                                <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                                                <option value="Bachelor of Business Administration">Bachelor of Business Administration</option> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Semister</label>
                                            <select name="semister" class="form-control">
                                                <option selected="selected" value="Semister 1">Semister 1</option>
                                                <option value="Semister 2">Semister 2</option>
                                                <option value="Semister 3">Semister 3</option>
                                                <option value="Semister 4">Semister 4</option> 
                                                <option value="Semister 5">Semister 5</option>
                                                <option value="Semister 6">Semister 6</option>
                                                <option value="Semister 7">Semister 7</option>
                                                <option value="Semister 8">Semister 8</option>
                                                <option value="Semister 9">Semister 9</option>
                                                <option value="Semister 10">Semister 10</option>
                                                <option value="Semister 11">Semister 11</option>
                                                <option value="Semister 12">Semister 12</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add Course</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>     
@endsection