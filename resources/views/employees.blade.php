@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-xl" id="main_navi_col">
                        <div class="row justify-content-start align-content-start mb-md-3" id="create_row">
                            <button type="button" class="btn btn-success">Add new employee</button>
                        </div>
                        <ul class="list-group" id="employee_list">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg justify-content-start">
                                        <p>First Name, Last Name</p>
                                        <p>Company</p>
                                        <p>Email</p>
                                        <p>Phone</p>
                                    </div>
                                    <div class="col justify-content-end align-self-end">
                                        <button type="button" class="btn btn-info">Update</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">Dummy Employee</li>
                            <li class="list-group-item">Dummy Employee</li>
                            <li class="list-group-item">Dummy Employee</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
