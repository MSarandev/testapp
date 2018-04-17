@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editing: {{$company->name}}</h1>

        <!-- Point to the update, with ID -->

        {!! Form::open(['action' => ['CompaniesController@update', $company->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $company->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $company->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
            {{Form::label('website', 'Website')}}
            {{Form::text('website', $company->website, ['class' => 'form-control', 'placeholder' => 'Website'])}}
        </div>
        <!-- trick into PUT request -->
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection
