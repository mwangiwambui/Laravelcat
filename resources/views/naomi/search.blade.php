
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
            <div class="form-group">
                <label for="student_no">Student Number</label>
                <select id="student_no" name="student_id"  class="form-control">
                    @foreach($student_no as $student)
                        <option>{{$student->student_no}}</option>
                    @endforeach
                </select>
            </div>
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
