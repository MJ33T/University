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
                            <h3 class="card-title">Add New Student</h3>
                            <a href="/admin_dash"><button class="float-right btn btn-warning">Dashboard</button></a> 
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/add_student" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="fname" class="form-control"  placeholder="Enter First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="lname" class="form-control"  placeholder="Enter Last Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Student ID</label>
                                            <input type="text" name="sid" class="form-control" placeholder="Enter Student ID">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Present Address</label>
                                    <input type="text" name="paddress" class="form-control"  placeholder="Enter Present Address">
                                </div>
                                <div class="form-group">
                                    <label>Permanent Address</label>
                                    <input type="text" name="peraddress" class="form-control"  placeholder="Enter Permanent Address">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select name="gender" class="form-control select2" style="width: 100%;">
                                              <option selected="selected" value="Male">Male</option>
                                              <option value="Female">Female</option>
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" name="dob" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>     
@endsection