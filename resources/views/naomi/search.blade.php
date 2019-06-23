
@extends('naomi.layout.template')

@section('content')

<div class="container">
<div class="input-group row">
    <form action="{{route('searchstudent')}}" method="get">
        @if ($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach

        @endif
        <input type="text" class="form-control" placeholder="Search Student Fees Total" style="width: 500px;" name="student_id" aria-label="Student's Id" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" name="stid" type="submit" id="button-addon2">Search</button>
        </div>
        <div>
        </div>
    </form>
</div>
    @if(isset($_GET['stid']))
        <div>Total fee is : {{$totalfee}}</div>
        @endif

</div>
    @endsection
