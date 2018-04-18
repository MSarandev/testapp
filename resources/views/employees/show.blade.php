@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-xl" id="main_navi_col">
                            <div class="row justify-content-center mb-md-3 mt-3" id="create_row">
                                <a class="btn btn-outline-dark"
                                   role="button" href="/employees">Back</a>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h1><em>{{$employee->firstName}},{{$employee->lastName}}</em></h1>
                                    <h3>Works at: {{$employee::find($employee->id)->company }}</h3>
                                    <h5>Email: {{ $employee->email }}</h5>
                                    <h5>Phone: {{ $employee->phone }}</h5>
                                    <hr>
                                    <p>Last modified: {{$employee->updated_at}}</p>
                                </li>
                                <hr>
                                <!-- Extra buttons -->
                                <a class="btn btn-warning"
                                   role="button" href="/employees/{{$employee->id}}/edit">Update</a>

                                {!! Form::open(['action' => ['EmployeesController@destroy', $employee->id],
                                                'method' => 'POST',
                                                'id'     => 'form_delete']) !!}

                                {{Form::hidden('_method', 'DELETE')}}

                                {{Form::submit('Delete', ['class' => 'btn w-100 btn-danger mt-2'])}}
                                {!! Form::close() !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
