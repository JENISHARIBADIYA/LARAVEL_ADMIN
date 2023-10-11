@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">View Categories</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="breadcrumb-item active">View Categories</li>
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
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Category Name : </label>
                                    {{$data['current_cat']->cat_name}}
                                </div>
                                 <div class="form-group">
                                    <label for="">Category Image : </label>
                                    <img src='{{asset($data["current_cat"]->cat_image)}}' height="150" style="margin-top: 10px;" />
                                </div>
                                <div class="form-group">
                                    <label for="">Category Status : </label>
                                     @if($data['current_cat']->status == 1)
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
