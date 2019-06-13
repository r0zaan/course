@extends('layouts.master')

@section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        {{--<h3>{{$emails}}</h3>--}}

                        <p>Email Users</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-email"></i>
                    </div>
                    <a href="{{url('admin/emails')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            {{--<h3>{{$locations}}</h3>--}}
                            <p>Location</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-location"></i>
                        </div>
                        <a href="{{url('admin/locations')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            {{--<h3>{{$users}}</h3>--}}

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{url('admin/users')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <div class="box box-primary">
                    <div class="box-header" style="align-content: center;">
                        <h3>Login in</h3>
                        <h4>Welcome {{Auth::user()->name}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection