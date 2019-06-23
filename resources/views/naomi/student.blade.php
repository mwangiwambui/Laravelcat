@extends('naomi.layout.template')
@section('content')

    <div class="container">
        <div class="row">
            <form class="needs-validation" novalidate action="{{route('storestudent')}}" method="get">
                @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <div  class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                    @endforeach

                @endif
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Surname</label>
                        <input type="text" class="form-control" id="validationCustom01" name="surname" placeholder="Surname" value="{{old('surname')}}" required>
                        <div class="valid-feedback">
                            Please enter a name!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">First name</label>
                        <input type="text" class="form-control" name="firstname" id="validationCustom02" placeholder="Firstname" value="{{old('firstname')}}" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="othernames">Other names</label>
                        <input type="text" class="form-control" name="othernames" id="othernames" placeholder="Other names" value="{{old('othernames')}}" required>
                </div>
                    <div class="col-md-4 mb-3">
                        <label for="dob">Date of Birth</label>
                        <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth" value="{{old('dob')}}" required>
                        <div class="valid-feedback">
                            Enter date of Birth!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="{{old('address')}}" required>
                        <div class="valid-feedback">
                            Enter your address!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="student_no">Student Number</label>
                        <input type="text" class="form-control" name="student_no" id="student_no" placeholder="Student Number" value="{{old('student_no')}}" required>
                        <div class="valid-feedback">
                            Enter your student Number!
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
        <hr>
        <div class="row">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Othernames</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Student Number</th>
                </tr>
                </thead>
                <tbody>
                @foreach($student as $details)
                    <tr>
                        <td>{{$details->surname}}</td>
                        <td>{{$details->firstname}}</td>
                        <td>{{$details->othernames}}</td>
                        <td>{{$details->dob}}</td>
                        <td>{{$details->address}}</td>
                        <td>{{$details->student_no}}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Othernames</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Student Number</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection
