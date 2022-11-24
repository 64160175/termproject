@extends('layouts.app')

@section('content')

<style>
body {
    background-image: url('https://g-grafolio.pstatic.net/20220815_114/16605424645407JX3k_JPEG/%BA%F1%B4%C2_%B3%BB%B0%A1_%B8%B7%BE%C6%C1%D9%B0%D4-_%B9%CC%BF%E4_-pc.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<div class="container">
    <div class="row justify-content-center">

        <div class="card">
            <div class="card-header">Registration<a href="{{ route('registration.create'); }}">Add</a>
            </div>
            <div class="card-body">
                <table border=1>
                    <tr>
                        <td>รหัสนิสิต</td>
                        <td>รหัสวิชา</td>
                        <td>เชค</td>
                        <td>เกรด</td>
                        <td>เทอม</td>
                        <td>การดำเนินการ</td>
                    </tr>
                    @foreach ($registration as $reg)
                    <tr>
                        <td>{{ $reg->student_code }}</td>
                        <td>{{ $reg->course_code }}</td>
                        <td>{{ $reg->section }}</td>
                        <td>{{ $reg->grade}}</td>
                        <td>{{ $reg->semester }}</td>
                        <td>
                            <form method="POST" action="{{ route('registration.destroy',$reg->student_code) }}">
                                <a class='btn btn-primary'
                                    href="{{ route('registration.edit',$reg->student_code); }}">Edit</a>

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