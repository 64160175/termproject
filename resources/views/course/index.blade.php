@extends('layouts.app')

@section('content')

<style>
body {
    background-image: url('https://g-grafolio.pstatic.net/20221025_109/1666689289138MiRy6_JPEG/%C7%D2%B7%CE%C0%A9-3.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>


<div class="container">
    <div class="row justify-content-center">

        <div class="card">
            <div class="card-header">Course <a href="{{ route('course.create'); }}">Add</a>
            </div>
            <div class="card-body">
                <table border=1>
                    <tr>
                        <td>รหัสวิชา</td>
                        <td>ชื่อวิชา</td>
                        <td>หน่วยกิต</td>
                        <td>การดำเนินการ</td>
                    </tr>
                    @foreach ($course as $cou)
                    <tr>
                        <td>{{ $cou->course_code }}</td>
                        <td>{{ $cou->course_name }}</td>
                        <td>{{ $cou->credit }}</td>
                        <td>
                            <form method="POST" action="{{ route('course.destroy',$cou->course_code) }}">
                                <a class='btn btn-primary' href="{{ route('course.edit',$cou->course_code); }}">Edit</a>

                                @csrf
                                @method("DELETE")
                                <button type="submit" class='btn btn-danger'>Delete</button>
                        </td>
                        </form>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</div>
</div>
@endsection