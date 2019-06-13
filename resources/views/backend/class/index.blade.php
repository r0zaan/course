@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Class
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Class</a></li>
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
                                data-url="{{ action('Backend\ClassroomController@create') }}"
                                style="position: absolute;right: 10px;top: 10px;">
                            + New Class
                        </button>
                <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                    <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($classes as $key => $class)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$class->name}}</td>
                                        <td>
                                            <form action="{{ route('classes.destroy', array($class->id)) }}"
                                                  method="DELETE" class="delete-data-ajax">
                                                {!! csrf_field() !!}

                                                <a title="Edit" data-url="{{action('Backend\ClassroomController@edit', $class->id)}}"
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



