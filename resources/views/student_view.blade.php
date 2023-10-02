@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">View Students</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="breadcrumb-item active">View Students</li>
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
                        </div>
                        <!-- /.card-header -->
                        <form>
                            @if(!is_null($data['current_student']))
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="">Full Name : </label>
                                    {{$data['current_student']->firstName}}  {{$data['current_student']->middleName}}  {{$data['current_student']->lastName}}
                                </div>

                                <div class="form-group">
                                    <label for="">Email : </label>
                                    {{$data['current_student']->email}}
                                </div>

                                <div class="form-group">
                                    <label for="">Phone No : </label>
                                    {{$data['current_student']->phone_no}}
                                </div>


                                <div class="form-group">
                                    <label for="">Data Of Birth : </label>
                                    {{$data['current_student']->dob}}
                                </div>


                                <div class="form-group">
                                    <label for="">City : </label>
                                    {{$data['current_student']->city}}
                                </div>


                                <div class="form-group">
                                    <label for="">State : </label>
                                    {{$data['current_student']->state}}
                                </div>

                                <div class="form-group">
                                    <label for="">Country : </label>
                                    {{$data['current_student']->country}}
                                </div>

                                <div class="form-group">
                                    <label for="">Student Status : </label>
                                     @if($data['current_student']->status == 1)
                                     <span style='color:green'>
                                        <i class='fas fa-check-square'></i>
                                    </span>
                                      @else
                                      <span style='color:red'>
                                        <i class='fas fa-times-circle'></i>
                                    </span>
                                      @endif
                                </div>

                            </div>
                            <!-- /.card-body -->
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
