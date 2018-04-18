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
                                   role="button" href="/companies">Back</a>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="row justify-content-center">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png"
                                             class="border border-primary rounded-circle"
                                             width="150"
                                             height="150">
                                    </div>
                                    <h1>{{$company->name}}</h1>
                                    <p>Email: {{ $company->email }}</p>
                                    <p>Website:
                                        <a href="{{ $company->website }}">{{ $company->website }}</a>
                                    </p>
                                    <hr>
                                    <p>Last modified: {{$company->updated_at}}</p>
                                </li>
                                <hr>
                                <!-- Extra buttons -->
                                <a class="btn btn-warning"
                                   role="button" href="/companies/{{$company->id}}/edit">Update</a>

                                {!! Form::open(['action' => ['CompaniesController@destroy', $company->id],
                                                'method' => 'POST']) !!}

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
