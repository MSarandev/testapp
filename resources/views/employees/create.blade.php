@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Add an employee</h1>

        {!! Form::open(['action' => 'EmployeesController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('firstName', 'First Name')}}
            {{Form::text('firstName', '', ['class' => 'form-control', 'placeholder' => 'First Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('lastName', 'Last Name')}}
            {{Form::text('lastName', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
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
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
            {{Form::label('phone', 'Phone')}}
            {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone'])}}
        </div>

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>

@endsection