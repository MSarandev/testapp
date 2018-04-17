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
                                   role="button" href="/companies/create">Add a company</a>
                            </div>
                            @if(count($companies) > 0)
                                <ul class="list-group">
                                @foreach($companies as $c1)
                                    <li class="list-group-item">
                                        <a href="/companies/{{$c1->id}}"><h2>{{ $c1->name }}</h2></a>
                                        <p>{{ $c1->email }}</p>
                                        <a href="{{ $c1->website }}">{{ $c1->website }}</a>
                                    </li>
                                @endforeach
                                </ul>

                                <div class="row justify-content-center mb-md-3 mt-3">
                                    {{$companies->links()}}
                                </div>
                            @else
                                <p>No companies found</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

