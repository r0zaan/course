@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Video
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Video</a></li>
            <li class="active">Table</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Data Tables</h3>
                    </div>
                    <button type="button" class="btn btn-primary ajax-modal"
                            data-url="{{ action('Backend\VideoController@create') }}"
                            style="position: absolute;right: 10px;top: 10px;">
                        + New Video
                    </button>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Video Description</th>
                                <th>Play</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($videos as $key => $video)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$video->class->name}}-{{$video->subject->name}}-{{$video->unit->name}}
                                        -{{$video->title}}</td>
                                    <td>{{$video->description}}</td>
                                    <td><a title="load Video"
                                           data-url="{{action('Backend\VideoController@showVideo', $video->id)}}"
                                           href="#" class="ajax-modal">{{$video->video_name}}</a></td>
                                    <td>
                                        <form action="{{ route('videos.destroy', array($video->id)) }}"
                                              method="DELETE" class="delete-data-ajax">
                                            {!! csrf_field() !!}

                                            <a title="Edit"
                                               data-url="{{action('Backend\VideoController@edit', $video->id)}}"
                                               class="btn btn-success ajax-modal"><i
                                                        class="fa fa-pencil-square-o"></i></a>
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).on('change', '#class', function () {
            $('#unit').empty();
            $.post(
                $(this).attr('data-url'),
                {"class_id": $(this).val(), "_token": "{{ csrf_token() }}"},
                function (response) {
                    console.log(response);
                    $.each(response, function (i, item) {
                        $('#unit').append('<option value="' + response[i].id + '">' + response[i].name + '</option>');
                    });
                }
            );
        });
        $(document).on('change', '#subject', function () {
            $('#unit').empty();
            $.post(
                $(this).attr('data-url'),
                {
                    "subject_id": $(this).val(),
                    "class_id": $('#class').val(),
                    "_token": "{{ csrf_token() }}"
                },
                function (response) {
                    console.log(response);
                    $.each(response, function (i, item) {
                        $('#unit').append('<option value="' + response[i].id + '">' + response[i].name + '</option>');
                    });
                }
            );
        });

    </script>
@endsection



