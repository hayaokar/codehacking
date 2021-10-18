@extends('layouts.admin')


@section('content')

    <h1>Update users</h1>


    <div class="row">

        <div class="col-sm-3">

            <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

        </div>


        <div class="col-sm-9">

            {!! Form::model($user,['method'=>'PATCH','action'=>['App\Http\Controllers\AdminUserController@update',$user->id],'files'=>true]) !!}



            <div class="form-group">

                {!!  Form::label('name', 'Name:')!!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}

            </div>


            <div class="form_group">

                {!!  Form::label('email', 'Email:')!!}
                {!! Form::email('email',null,['class'=>'form-control']) !!}

            </div>


            <div class="form_group">

                {!!  Form::label('role_id', 'Role:')!!}
                {!! Form::select('role_id',[''=>'Choose option']+$roles,null,['class'=>'form-control']) !!}

            </div>

            <div class="form_group">

                {!!  Form::label('is_active', 'Status:')!!}
                {!! Form::select('is_active',array(1=>'active',0=>'not active'),null,['class'=>'form-control']) !!}

            </div>

            <div class="form_group">

                {!!  Form::label('photo_id', 'Photo')!!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}

            </div>

            <div class="form_group">

                {!!  Form::label('password', 'Password: ')!!}
                {!! Form::password('password',['class'=>'form-control']) !!}

            </div>


            <div class="form_group">

                {!! Form::submit('create user',['class'=>'btn btn-primary col-sm-4']) !!}

            </div>



            {!! Form::close() !!}


            {!! Form::open(['method'=>'DELETE','action'=>['App\Http\Controllers\AdminUserController@destroy',$user->id]]) !!}

            <div class="form_group">

                {!! Form::submit('Delete',['class'=>'btn btn-danger col-sm-4']) !!}

            </div>

            {!! Form::close() !!}





        </div>

    </div>




    <div class="row">

    @include('includes.form_errors')

    </div>

@stop
