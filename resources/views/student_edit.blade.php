@extends('layouts.app')
@section('content')
<?php

// country selection
$selectdIndia = ($data['current_student'][0]->country == 'India') ? 'selected' : '';
$selectdUSA = ($data['current_student'][0]->country == 'USA') ? 'selected' : '';
$selectdUK = ($data['current_student'][0]->country == 'UK') ? 'selected' : '';
$selectdChina = ($data['current_student'][0]->country == 'China') ? 'selected' : '';


// city selection
$selectdRajkot = ($data['current_student'][0]->city == 'Rajkot') ? 'selected' : '';
$selectdSurat = ($data['current_student'][0]->city == 'Surat') ? 'selected' : '';
$selectdAhmedabad = ($data['current_student'][0]->city == 'Ahmedabad') ? 'selected' : '';
$selectdUdaipur = ($data['current_student'][0]->city == 'Udaipur') ? 'selected' : '';
$selectdJunagadh = ($data['current_student'][0]->city == 'Junagadh') ? 'selected' : '';
$selectdGandhinagar = ($data['current_student'][0]->city == 'Gandhinagar') ? 'selected' : '';
$selectdUttarPradesh = ($data['current_student'][0]->city == 'UttarPradesh') ? 'selected' : '';
$selectdJaipur = ($data['current_student'][0]->city == 'Jaipur') ? 'selected' : '';
$selectdMumbai = ($data['current_student'][0]->city == 'Mumbai') ? 'selected' : '';

// state selection
$selectdGujarat = ($data['current_student'][0]->state == 'Gujarat') ? 'selected' : '';
$selectdRajsthan = ($data['current_student'][0]->state == 'Rajsthan') ? 'selected' : '';
$selectdUP = ($data['current_student'][0]->state == 'UP') ? 'selected' : '';
$selectdMaharashtra = ($data['current_student'][0]->state == 'Maharashtra') ? 'selected' : '';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Students</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="breadcrumb-item active">Edit Students</li>
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
                           <h3 style='color:red;text-align:center;'></h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{route('student_update',[$data['current_student'][0]->id])}}" method="POST">
                          @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="">First Name</label>
                                    <input class="form-control" type="text" placeholder="Enter First Name" name="firstName" id="firstName" value="{{ $data['current_student'][0]->firstName }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Middle Name</label>
                                    <input class="form-control" type="text" placeholder="Enter Middle Name" name="middleName" id="middleName" value="{{ $data['current_student'][0]->middleName }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input class="form-control" type="text" placeholder="Enter Last Name" name="lastName" id="lastName" value="{{ $data['current_student'][0]->lastName }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input class="form-control" type="text" placeholder="Enter Email" name="email" id="email" value="{{ $data['current_student'][0]->email }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Phone No</label>
                                    <input class="form-control" type="text" placeholder="Enter Phone No" name="phone_no" id="phone_no" value="{{ $data['current_student'][0]->phone_no }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Date of Birth</label>
                                    <input class="form-control" type="date" placeholder="Enter " name="dob" id="dob" value="{{ date('Y-m-d', strtotime($data['current_student'][0]->dob))}}">
                                </div>

                                <div class="form-group">
                                    <label for="">City</label>
                                    <select class="custom-select form-control-border" id="exampleSelectBorder" name="city">
                                        <option value="Rajkot" <?php echo $selectdRajkot; ?>>Rajkot</option>
                                        <option value="Surat" <?php echo $selectdSurat; ?>>Surat</option>
                                        <option value="Ahmedabad" <?php echo $selectdAhmedabad; ?>>Ahmedabad</option>
                                        <option value="Udaipur" <?php echo $selectdUdaipur; ?>>Udaipur</option>
                                        <option value="Junagadh" <?php echo $selectdJunagadh; ?>>Junagadh</option>
                                        <option value="Gandhinagar" <?php echo $selectdGandhinagar; ?>>Gandhinagar</option>
                                        <option value="Uttar Pradesh" <?php echo $selectdUttarPradesh; ?>>Uttar Pradesh</option>
                                        <option value="Jaipur" <?php echo $selectdJaipur; ?>>Jaipur</option>
                                        <option value="Mumbai" <?php echo $selectdMumbai; ?>>Mumbai</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">State</label>
                                    <select class="custom-select form-control-border" id="exampleSelectBorder" name="state">
                                        <option value="Gujarat" <?php echo $selectdGujarat; ?>>Gujarat</option>
                                        <option value="Rajsthan" <?php echo $selectdRajsthan; ?>>Rajsthan</option>
                                        <option value="UP" <?php echo $selectdUP; ?>>UP</option>
                                        <option value="Maharashtra" <?php echo $selectdMaharashtra; ?>>Maharashtra</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Country</label>
                                    <select class="custom-select form-control-border" id="exampleSelectBorder" name="country">
                                      <option value="India" <?php echo $selectdIndia; ?>>India</option>
                                      <option value="USA" <?php echo $selectdUSA; ?>>USA</option>
                                      <option value="UK" <?php echo $selectdUK; ?>>UK</option>
                                      <option value="China" <?php echo $selectdChina; ?>>China</option>
                                    </select>


                                <div class="form-group">
                                    <label for="">Status</label>
                                    <div class="custom-control custom-radio">
                                        <?php
                                          $a_checked = '';
                                          $i_checked = '';
                                          if($data['current_student'][0]->status == '1')
                                          {
                                            $a_checked = 'checked';
                                          }
                                          else
                                          {
                                            $i_checked = 'checked';
                                          }
                                         ?>
                                        <input class="custom-control-input" type="radio" id="customRadio1" name="status" value="1" <?php echo $a_checked; ?>>
                                        <label for="customRadio1" class="custom-control-label">Active</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio2" name="status" value="0" <?php echo $i_checked; ?>>
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
