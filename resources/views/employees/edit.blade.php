@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Editing: {{$employee->firstName}}, {{$employee->lastName}}</h1>

        {!! Form::open(['action' => ['EmployeesController@update', $employee->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('firstName', 'First Name')}}
            {{Form::text('firstName', $employee->firstName, ['class' => 'form-control', 'placeholder' => 'First Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('lastName', 'Last Name')}}
            {{Form::text('lastName', $employee->lastName, ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('company', 'Company')}}
            <select class="form-control" name="company">
                @if(count($companies) > 0)
                    @foreach($companies as $c)
                        <option value="{{$c->name}}">{{$c->name}}</option>
                    @endforeach
                @else
                    <option value="none">No companies found</option>
                @endif
            </select>
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $employee->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
            {{Form::label('phone', 'Phone')}}
            {{Form::text('phone', $employee->phone, ['class' => 'form-control', 'placeholder' => 'Phone'])}}
        </div>

        <!-- trick into PUT request -->
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>

@endsection