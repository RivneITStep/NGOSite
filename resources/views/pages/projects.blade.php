@extends('layout')

@section('assets')
    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    {{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>--}}
    <style>
        .bs-example {
            margin: 20px;
        }

        .accordion .fa {
            margin-right: 0.5rem;
        }
    </style>
    <script>
        $(document).ready(function () {
            // Add minus icon for collapse element which is open by default
            $(".collapse.show").each(function () {
                $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
            });
            // Toggle plus minus icon on show hide of collapse element
            $(".collapse").on('show.bs.collapse', function () {
                $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
            }).on('hide.bs.collapse', function () {
                $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
            });
        });
    </script>
@endsection

@section('content')

    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="bs-example">
                    @foreach($projects as $project)
                    <div class="accordion" id="accordion{{$project->year}}">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion{{$project->year}}" href="#collapse{{$project->id}}">
                                    {{$project->year}}
                                </a>
                            </div>
                            <div id="collapse{{$project->id}}" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <!-- Here we insert another nested accordion -->
                                    @foreach($projects as $project)
                                    <div class="accordion" id="accordion{{$project->id}}">
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion{{$project->id}}" href="#collapseInnerOne">
                                                    {{$project->title}}
                                                </a>
                                            </div>
                                            <div id="collapseInnerOne" class="accordion-body collapse in">
                                                <div class="accordion-inner">
                                                    <p>{!!$project->description!!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- Inner accordion ends here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{--<div class="accordion" id="accordionExample">
                        @foreach($projects as $project)
                            <div class="card">
                                <div class="card-header" id="heading{{$project->id}}">
                                    <h2 class="mb-0">
                                        <button type="button" class="btn btn-link" data-toggle="collapse"
                                                data-target="#collapse{{$project->id}}"><i class="fa fa-plus"></i> {{$project->year}}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse{{$project->id}}" class="collapse" aria-labelledby="heading{{$project->id}}"
                                     data-parent="#accordionExample">
                                    <div class="accordion-inner">
                                    <div class="card-body">
                                        <div class="accordion" id="accordionExample">
                                            @foreach($projects as $project)
                                                <div class="card">
                                                    <div class="card-header" id="heading{{$project->id}}">
                                                        <h2 class="mb-0">
                                                            <button type="button" class="btn btn-link" data-toggle="collapse"
                                                                    data-target="#collapse{{$project->id}}"><i class="fa fa-plus"></i> {{$project->title}}
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapse{{$project->id}}" class="collapse" aria-labelledby="heading{{$project->id}}"
                                                         data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>{!!$project->description!!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    </div>--}}
{{--                    <div class="accordion" id="accordionExample">
                        @foreach($projects as $project)
                            <div class="card">
                                <div class="card-header" id="heading{{$project->id}}">
                                    <h2 class="mb-0">
                                        <button type="button" class="btn btn-link" data-toggle="collapse"
                                                data-target="#collapse{{$project->id}}"><i class="fa fa-plus"></i> {{$project->title}}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse{{$project->id}}" class="collapse" aria-labelledby="heading{{$project->id}}"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>{!!$project->description!!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>--}}
                </div>
                @include('pages._sidebar')
            </div>
        </div>
    </div>
    <!-- end main content-->

@endsection

