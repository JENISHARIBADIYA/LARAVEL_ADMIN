@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Students</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Add Students</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                             </div>
                            <!-- /.card-header -->
                            <form action="{{ route('student_save') }}" method="POST">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input class="form-control" type="text" placeholder="Enter First Name" name="firstname" id="firstname">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Middle Name</label>
                                        <input class="form-control" type="text" placeholder="Enter Middle Name" name="middleName" id="middleName">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input class="form-control" type="text" placeholder="Enter Last Name"name="lastName" id="lastName">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input class="form-control" type="text" placeholder="Enter Email" name="email" id="email">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Phone No</label>
                                        <input class="form-control" type="text" placeholder="Enter Phone No" name="phone_no" id="phone_no">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Date of Birth</label>
                                        <input class="form-control" type="date" placeholder="Enter data of birth" name="dob" id="dob">
                                    </div>

                                    <div class="form-group">
                                        <label for="">City</label>
                                        <select class="custom-select form-control-border" id="exampleSelectBorder" name="city">
                                            <option value="Rajkot">Rajkot</option>
                                            <option value="Surat">Surat</option>
                                            <option value="Ahmedabad">Ahmedabad</option>
                                            <option value="Udaipur">Udaipur</option>
                                            <option value="Junagadh">Junagadh</option>
                                            <option value="Gandhinagar">Gandhinagar</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="Jaipur">Jaipur</option>
                                            <option value="Mumbai">Mumbai</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">State</label>
                                        <select class="custom-select form-control-border" id="exampleSelectBorder" name="state">
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Rajsthan">Rajsthan</option>
                                            <option value="UP">UP</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Country</label>
                                        <select class="custom-select form-control-border" id="exampleSelectBorder" name="country">
                                            <option value="India">India</option>
                                            <option value="USA">USA</option>
                                            <option value="UK">UK</option>
                                            <option value="China">China</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                            <label for="">Status</label>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio1" name="status" value="1">
                                                    <label for="customRadio1" class="custom-control-label">Active</label>
                                                </div>

                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio2" name="status" value="0">
                                                    <label for="customRadio2" class="custom-control-label">In Active</label>
                                                </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('students') }}" class="btn btn-danger">Cancel</a>
                                </div>

                                <!-- /.card-body -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
