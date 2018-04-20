@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add a company</h1>

        {!! Form::open(['action' => 'CompaniesController@store',
                        'method' => 'POST',
                        'files' => true]) !!}

            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
            </div>
            <div class="form-group">
                {{Form::label('website', 'Website')}}
                {{Form::text('website', '', ['class' => 'form-control', 'placeholder' => 'Website'])}}
            </div>
        <div class="form-group">
            {{Form::label('logo', 'Logo image (PNG, min 100x100)')}}
            <br>
            {!! Form::file('image', null) !!}
        </div>
        <div class="row justify-content-center mb-md-3 mt-3" id="create_row">
            {{Form::submit('Submit', ['class' => 'btn btn-outline-primary'])}}
            {!! Form::close() !!}
            <a class="btn btn-outline-danger ml-3"
               role="button" href="/companies">Back</a>
        </div>
    </div>
@endsection
