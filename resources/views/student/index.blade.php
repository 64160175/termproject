@extends('layouts.app')

@section('content')

<style>
body {
    background-image: url('https://g-grafolio.pstatic.net/20221025_266/1666653834375wNDvH_JPEG/882422EA-84BB-4D0D-ADF3-5F5F3B969B72.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<div class="container">
    <div class="row justify-content-center">

        <div class="card">
            <div class="card-header">Student<a href="{{ route('student.create'); }}">Add</a>
            </div>
            <div class="card-body">
                <table border=1>
                    <tr>
                        <td>รหัสนิสิต</td>
                        <td>ชื่อ</td>
                        <td>รหัสแผนก</td>
                        <td>เกรดเฉลี่ย</td>
                        <td>รหัสที่ปรึกษา</td>
                        <td>การดำเนินการ</td>
                    </tr>
                    @foreach ($student as $st)
                    <tr>
                        <td>{{ $st->student_code }}</td>
                        <td>{{ $st->student_name }}</td>
                        <td>{{ $st->dept_code }}</td>
                        <td>{{ $st->gpa }}</td>
                        <td>{{ $st->advisor_code }}</td>
                        <td>
                            <form method="POST" action="{{ route('student.destroy',$st->student_code) }}">
                                <a class='btn btn-primary'
                                    href="{{ route('student.edit',$st->student_code); }}">Edit</a>

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