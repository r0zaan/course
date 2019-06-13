@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Unit
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Unit</a></li>
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
                            data-url="{{ action('Backend\UnitController@create') }}"
                            style="position: absolute;right: 10px;top: 10px;">
                        + New Unit
                    </button>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Class</th>
                                <th>Subject</th>
                                <th>Unit Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($classes as $key => $class)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$class->name}}</td>
                                    <td>
                                        @foreach($class->units()->orderBy('name','asc')->get() as $unit)
                                            {{$unit->subject->name}}<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($class->units()->orderBy('name','asc')->get() as $unit)
                                            {{$unit->name}} ( {{$unit->description}} )
                                            <form action="{{ route('units.destroy', array($unit->id)) }}"
                                                  method="DELETE" class="delete-data-ajax">
                                                {!! csrf_field() !!}

                                                <a title="Edit"
                                                   data-url="{{action('Backend\UnitController@edit', $unit->id)}}"
                                                   class="btn btn-success ajax-modal"><i
                                                            class="fa fa-pencil-square-o"></i></a>
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </form>
                                        @endforeach
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



