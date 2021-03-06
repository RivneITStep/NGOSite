@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Welcome!
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Slider images</h3>
                </div>
                <!-- /.box-header -->
                <div class="container">
                    <form action="{{ url('admin/image-slider') }}" class="form-image-upload" method="POST"
                          enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-5">
                                <strong>Title:</strong>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                            <div class="col-md-5">
                                <strong>Image:</strong>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <br/>
                                <button type="submit" class="btn btn-success">Upload</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <h5 style="color: darkred">Recommended height and weight for images: 1500 * 600 pixels</h5>
                    <h5 style="color: darkred">Image size must be under 2MB</h5>
                    <br/>
                    <div class="row">
                        <div class='list-group gallery'>
                            @if($images->count())
                                @foreach($images as $image)
                                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                                        <a class="thumbnail fancybox" rel="ligthbox"
                                           href="/uploads/slider/{{ $image->image }}">
                                            <img class="img-responsive" alt="" src="/uploads/slider/{{ $image->image }}"/>
                                            <div class='text-center'>
                                                <small class='text-muted'>{{ $image->title }}</small>
                                            </div> <!-- text-center / end -->
                                        </a>
                                        <form action="{{ url('admin/image-slider',$image->id) }}" method="POST">
                                            <input type="hidden" name="_method" value="delete">
                                            {!! csrf_field() !!}
                                            <button onclick="return confirm('Are you sure?')" type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                                        </form>
                                    </div> <!-- col-6 / end -->
                                @endforeach
                            @endif
                        </div> <!-- list-group / end -->
                    </div> <!-- row / end -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
