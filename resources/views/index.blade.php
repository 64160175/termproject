@extends('layouts.app')

@section('content')

<body style="background-color: #b4d698">


    <style>
    body {
        background-image: url('https://g-grafolio.pstatic.net/20200609_97/1591693586980NQYtx_JPEG/%B9%E8%B0%E6%C8%AD%B8%E9.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>

    <div style="text-align:center;width:100%;">

        <div class="container"><br><br>

            <div style="font-family:cursive;" class="row justify-content-center">
                <h2><b>PROJECT 64160175 </b></h2><a <div class="card">
                    <div class="card-header">

                        <img src='https://download.services.iconscout.com/download?name=astronot&download=1&url=https%3A%2F%2Fd1mm88pimne64g.cloudfront.net%2Flottie%2Ffree%2Fpreview%2F3205483.gif%3Ftoken%3DeyJhbGciOiJoczI1NiIsImtpZCI6ImRlZmF1bHQifQ__.eyJpc3MiOiJkMW1tODhwaW1uZTY0Zy5jbG91ZGZyb250Lm5ldCIsImV4cCI6MTY2NzA4ODAwMCwicSI6bnVsbCwiaWF0IjoxNjY2ODc5NjY1fQ__.6e5fb972c2ddef3b6243827c5df523e0631a600bceec3c80f8da6c4ccb4f037c'
                            height=210><br>

                        <a href="{{ route('advisor.index'); }}">Advisor</a><br>
                        <a href="{{ route('course.index'); }}">Course</a><br>
                        <a href="{{ route('department.index'); }}">Department</a><br>
                        <a href="{{ route('registration.index'); }}">Registration</a><br>
                        <a href="{{ route('student.index'); }}">Student</a><br>

                    </div>
            </div>
        </div>
    </div>
    </style>



</body>
@endsection