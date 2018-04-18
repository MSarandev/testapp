@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-xl" id="main_navi_col">
                            <div class="row justify-content-center mb-md-3 mt-3" id="create_row">
                                <a class="btn btn-outline-success"
                                   role="button" href="/employees/create">Add an employee</a>
                            </div>
                            <!-- Check if we have at least one employee -->
                            @if(count($employees) > 0)
                                <!-- Create a new list group -->
                                <ul class="list-group">
                                    @foreach($employees as $e1)
                                        <!-- Create new list item -->
                                        <li class="list-group-item">
                                            <a href="/employees/{{$e1->id}}">
                                                <h2>{{ $e1->firstName }}, {{ $e1->lastName }}</h2>
                                            </a>

                                            <!-- Fetch the employer -->
                                            <h5>At: {{ $e1::find($e1->id)->company }}</h5>

                                            <p>{{ $e1->email }}</p>
                                            <p>{{ $e1->phone }}</p>
                                            <a href="{{ $e1->website }}">{{ $e1->website }}</a>
                                        </li>
                                    @endforeach
                                </ul>

                                <div class="row justify-content-center mb-md-3 mt-3">
                                    {{$employees->links()}}
                                </div>
                            @else
                                <!-- None found, display message -->
                                <p>No employees found</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection