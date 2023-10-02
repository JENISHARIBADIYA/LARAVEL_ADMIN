@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Students</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Students</li>
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
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="" method="post">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Phone No</th>
                                                <th>Data of birth</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Country</th>
                                                <th>Status</th>
                                                <th>Action
                                                    &nbsp;&nbsp;
                                                    <a href='{{ route('student_add') }}'>
                                                    <span style='color:green'>
                                                        <i class="fas fa-plus-circle"></i>
                                                    </span>
                                                </a>
                                            </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data['students'] as $student)
                                                <tr class="odd">
                                                    <td>{{$student->firstName	}} {{$student->middleName}} {{$student->lastName}}</td>
                                                    <td>{{$student->email}}</td>
                                                    <td>{{$student->phone_no}}</td>
                                                    <td>{{$student->dob}}</td>
                                                    <td>{{$student->city}}</td>
                                                    <td>{{$student->state}}</td>
                                                    <td>{{$student->country}}</td>
                                                    @if ($student->status == 1)
                                                        <td>
                                                            <span style='color:green'>
                                                                <i class='fas fa-check-square'></i>
                                                            </span>
                                                        </td>
                                                    @else
                                                        <td>
                                                            <span style='color:red'>
                                                                <i class='fas fa-times-circle'></i>
                                                            </span>
                                                        </td>
                                                    @endif
                                                    <td>
                                                        <a href='{{ route('student_edit', [$student->id]) }}'>
                                                            <span style='color:blue'>
                                                                <i class='fas fa-edit'></i>
                                                            </span>
                                                        </a>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a data-id='' href='{{ route('student_delete', [$student->id]) }}' class='delete_btn'>
                                                            <span style='color:red'>
                                                                <i class='fas fa-trash'></i>
                                                            </span>
                                                        </a>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a data-id='' href='{{ route('student_view', [$student->id]) }}' class='delete_btn'>
                                                            <span style='color:black'>
                                                                <i class='fas fa-eye'></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <!-- <th>Category Image</th> -->
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Phone No</th>
                                                <th>Data of birth</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Country</th>
                                                <th>Status</th>
                                                <th>Action
                                                    &nbsp;&nbsp;
                                                    <a href='{{ route('student_add') }}'>
                                                    <span style='color:green'>
                                                        <i class="fas fa-plus-circle"></i>
                                                    </span>
                                                </a>
                                            </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
