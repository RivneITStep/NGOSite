@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit report
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
        {{Form::open([
		'route'	=>	['reports.update', $report->id],
		'files'	=>	true,
		'method'	=>	'put'
	])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Year</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                                   value="{{$report->year}}" name="year">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                                   value="{{$report->title}}" name="title">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" id="" cols="30" rows="10"
                                      class="form-control">{{$report->description}}</textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{route('reports.index')}}" class="btn btn-default">Back</a>
                    <button class="btn btn-warning pull-right">Edit</button>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            {{Form::close()}}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
