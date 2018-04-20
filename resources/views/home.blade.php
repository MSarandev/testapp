@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-xl" id="main_navi_col">

                        <div class="jumbotron justify-content-center">
                            <h1 class="display-4">Hi {{Auth::user()->name}}</h1>
                            <p class="lead">What are we working on today?</p>
                            <hr class="my-4">
                            <p class="lead">
                                <a class="btn btn-outline-primary btn-lg"
                                   role="button" href="/companies">Companies</a>
                                <a class="btn btn-outline-primary btn-lg"
                                   role="button" href="#">Employees</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
