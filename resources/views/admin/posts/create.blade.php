@extends('layouts.admin')

@section('content')

    <h1>Create Posts</h1>


    <div class="row">

        {!! Form::open(['method'=>'POST','action'=>'App\Http\Controllers\AdminPostsController@store','files'=>true]) !!}
        <div class="form_group">

            {!!  Form::label('title', 'Title')!!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}

        </div>

        <div class="form_group">

            {!!  Form::label('category_id', 'Category')!!}
            {!! Form::select('category_id',[''=>'choose category']+$categories,null,['class'=>'form-control']) !!}

        </div>

        <div class="form_group">

            {!!  Form::label('photo_id', 'Photo')!!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}

        </div>
        <div class="form_group">

            {!!  Form::label('body', 'Description')!!}
            {!! Form::textarea('body',null,['class'=>'form-control']) !!}

        </div>
        <div class="form-group">

            {!! Form::submit('create post',['class'=>'btn btn-primary']) !!}

        </div>

        {!! Form::close() !!}


    </div>

    <div class="row">

        @include('includes.form_errors')

    </div>



@stop
