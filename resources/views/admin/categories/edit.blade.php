@extends('admin.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit category
            <small>good words...</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Edit category</h3>
                @include('admin.errors')
            </div>
            <div class="box-body">
                {{Form::open(['route'=>['categories.update',$category->id], 'method'=>'put'])}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="" value="{{$category->title}}">
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{route('categories.index')}}" class="btn btn-default">Back</a>
                <button class="btn btn-warning pull-right">Edit</button>
            </div>
            <!-- /.box-footer-->
            {{Form::close()}}
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection