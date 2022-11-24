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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @foreach( $course as $cou)
    @endforeach
    <div class="row justify-content-center">
        <div class="card">
            <form name="create" method="POST" action=" {{ route('course.update',$cou->course_code); }}">
                @csrf
                @method("PUT")
                <div class="card-header">แก้ไข Course</div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>รหัสวิชา</strong></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="course_code" readonly value="{{ $cou->course_code }}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>ชื่อวิชา</strong></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="course_name" value="{{ $cou->course_name }}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>หน่วยกิต</strong></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="credit" value="{{ $cou->credit }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ml-auto mr-auto" align=center>
                        <button type="reset" class="btn btn-primary">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                    </div>
            </form>
        </div>

    </div>
</div>

</div>
</div>
@endsection