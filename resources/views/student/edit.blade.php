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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @foreach( $student as $st)
    @endforeach
    <div class="row justify-content-center">
        <div class="card">
            <form name="create" method="POST" action=" {{ route('student.update',$st->student_code); }}">
                @csrf
                @method('PUT')
                <div class="card-header">แก้ไข Student</div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>รหัสแผนก</strong></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="student_code" readonly value="{{ $st->student_code }}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>ชื่อ</strong></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="student_name" value="{{ $st->student_name }}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>รหัสแผนก</strong></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="dept_code" value="{{ $st->dept_code }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>เกรดเฉลี่ย</strong></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="gpa" value="{{ $st->gpa }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>รหัสที่ปรึกษา</strong></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="advisor_code" readonly value="{{ $st->advisor_code }}"
                                    class="form-control">
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