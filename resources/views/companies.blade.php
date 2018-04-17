@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-xl" id="main_navi_col">
                        <div class="row justify-content-start align-content-start mb-md-3" id="create_row">
                            <button type="button" class="btn btn-success">Add new company</button>
                        </div>
                        <ul class="list-group" id="company_list">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2 justify-content-center align-self-start">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png"
                                             width="50"
                                             height="50"/>
                                    </div>
                                    <div class="col-lg justify-content-start">
                                        <h3>Dummy Company</h3>
                                        <p>Website</p>
                                        <p>Email</p>
                                    </div>
                                    <div class="col justify-content-end align-self-end">
                                        <button type="button" class="btn btn-info">Update</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">Dummy Company</li>
                            <li class="list-group-item">Dummy Company</li>
                            <li class="list-group-item">Dummy Company</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
