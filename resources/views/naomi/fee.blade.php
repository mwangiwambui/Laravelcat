@extends('naomi.layout.template')
@section('content')

    <div class="container">
        <div class="row">
            <form action="/fee/store" method="get">
                @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                           {{$error}}
                        </div>
                    @endforeach

                @endif
            <div class="form-row" style="width: 500px">
                <div class="form-group col-md-6">
                    <label for="student_no">Student Number</label>
                    <select id="student_no" name="student_no" class="form-control">
                        @foreach($student_no as $student)
                        <option>{{$student->student_no}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="amount">Amount</label>
                    <input type="number" class="form-control" name="amount" id="amount" placeholder="Amount" step="100">
                </div>
            </div>
                <button type="submit" class="btn btn-primary" style="margin-left: 500px">Submit</button>
            </form>
        </div>
        <hr>
        <div class="row">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Student Number</th>
                    <th>Amount</th>
                    <th>Date of Payment</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fee as $feepaid)
                <tr>
                    <td>{{$feepaid->student_id}}</td>
                    <td>{{$feepaid->amount}}</td>
                    <td>{{$feepaid->created_at}}</td>
                </tr>
                    @endforeach
                <tr class="table-dark">
                    <td>Total Amount:</td>
                    <td  style="text-align: center;" colspan="2">{{$sum}}</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>Student Number</th>
                    <th>Amount</th>
                    <th>Date of Payment</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
