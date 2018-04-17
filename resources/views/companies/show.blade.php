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
                                    <h1>{{$company->name}}</h1>
                                    <p>Email: {{ $company->email }}</p>
                                    <p>Website:
                                        <a href="{{ $company->website }}">{{ $company->website }}</a>
                                    </p>
                                    <hr>
                                    <p>Last modified: {{$company->updated_at}}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
