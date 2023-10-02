@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Categories</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Categories</li>
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
                            <form action="{{ route('cat_update', [$data['current_category'][0]->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Category Name</label>
                                        <input class="form-control" type="text" placeholder="Enter Categories Name" name="cat_name" id="cat_name" value="{{ $data['current_category'][0]->cat_name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Category Image</label>
                                        <input class="form-control" type="file" name="cat_image" id="cat_image">
                                        <img src='{{ asset($data['current_category'][0]->cat_image) }}' height="50" style="margin-top: 10px;" />
                                    </div>

                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <div class="custom-control custom-radio">
                                            <?php
                                            $a_checked = '';
                                            $i_checked = '';
                                            if ($data['current_category'][0]->status == '1')
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
                                    <a href="{{ route('categories') }}" class="btn btn-danger">Cancel</a>
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
