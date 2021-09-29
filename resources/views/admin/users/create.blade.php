@extends('layouts.admin')


@section('content')

   <h1>Create users</h1>


   {!! Form::open(['method'=>'POST','action'=>'App\Http\Controllers\AdminUserController@store','files'=>true]) !!}



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
       {!! Form::select('is_active',array(1=>'active',0=>'not active'),0,['class'=>'form-control']) !!}

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

       {!! Form::submit('create user',['class'=>'btn btn-primary']) !!}

   </div>



   {!! Form::close() !!}

   @include('includes.form_errors')




@stop
