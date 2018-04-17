@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-xl" id="main_navi_col">

                        <div class="jumbotron justify-content-center">
                            <h1 class="display-4">Welcome back</h1>
                            <p class="lead">What are we working on today?</p>
                            <hr class="my-4">
                            <p class="lead">
                                <a class="btn btn-primary btn-lg" href="{{ route('companies') }}"
                                   role="button" href="{{ url('/companies') }}">Companies</a>
                                <a class="btn btn-primary btn-lg" href="{{ route('employees') }}"
                                   role="button" href="{{ url('/employees') }}">Employees</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
