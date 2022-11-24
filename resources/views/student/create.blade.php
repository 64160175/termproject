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
    <div class="row justify-content-center">
        <div class="card">
            <form name="create" method="POST" action=" {{ route('student.store'); }}">
                @csrf
                <div class="card-header">เพิ่มข้อมูล Student</div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>รหัสนิสิต</strong></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="student_code" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>ชื่อ</strong></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="student_name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>รหัสแผนก</strong></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="dept_code" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong></strong>เกรด</label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="gpa" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong></strong>รหัสที่ปรึกษา</label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="advisor_code" class="form-control">
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