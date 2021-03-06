@extends('layouts/base')
@section('title') {{ $title }} @endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>{{ $title }}</h1>
            @include('includes/breadcrumbs')
        </section>
        <!-- Main content -->
        <section class="content">
            @include('includes/flash')
            <div class="row">
                <div class="col-md-10">
                    <!-- Box primary-->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <a href="{{ route('departments', [], false) }}" class="btn btn-default">Deparments</a>
                        </div>

                        {!! Form::open(['action' => ['DepartmentsController@destroy', $department->department_id], 'method' => 'POST', 'autocomplete' => 'off']) !!}
                            <div class="box-body">
                                <p>Are you sure you want to delete the <em>{{ $department->department_name }}</em> Department?</p>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                {{ Form::submit($title, 
                                    ['class' => 'btn btn-danger', 'name' => 'submit']) 
                                }}
                                {!! Html::nbsp(3) !!}
                                {{ Form::submit('Cancel', 
                                    ['class' => 'btn btn-default', 'name' => 'submit']) 
                                }}
                            </div>
                        {!! Form::close() !!}
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
