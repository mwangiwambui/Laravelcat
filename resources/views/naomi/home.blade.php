@extends('naomi.layout.template')

@section('content')

    <div class="container">
        <div class="row">
            <div>
                <a href="{{route('student')}}">
            <button type="button" style="width: 500px;" class="btn btn-outline-secondary btn-lg" >Student</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div>
                <a href="{{route('fee')}}">
            <button type="button" style="width: 500px;" class="btn btn-outline-secondary btn-lg" >Fee</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div>
                <a href="{{route('search')}}">
                <button type="button" style="width: 500px;" class="btn btn-outline-secondary btn-lg" >Search Student</button>
                </a>
            </div>
        </div>
    </div>



@endsection
