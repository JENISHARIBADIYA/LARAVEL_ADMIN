@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Change Password</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Change Password</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
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
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                              <h5><i class="icon fas fa-check"></i> Success!</h5>
                              {{ session('status') }}
                            </div>
                            @endif
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
                        <form action="{{route('updatePass')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Old Password</label>
                                    <input class="form-control" type="password" placeholder="Enter Old Password"
                                        name="oldPass" id="oldPass" value="{{ old('oldPass') }}">
                                </div>
                                <div class="form-group">
                                    <label for="">New Password</label>
                                     <input class="form-control" type="password" placeholder="Enter New Password"
                                        name="newPass" id="newPass" value="{{ old('newPass') }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Confirm Password</label>
                                     <input class="form-control" type="password" placeholder="Enter Confirm Password"
                                        name="cPass" id="cPass" value="{{ old('cPass') }}">
                                </div>
                             
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>                                
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
