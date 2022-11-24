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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
    @endif
    @foreach( $registration as $reg)
    @endforeach

    <div class="row justify-content-center">
        <div class="card">
            <form name="create" method="POST" action=" {{ route('registration.update',$reg->student_code); }}">
                @csrf
                @method("PUT")
                <div class="card-header">แก้ไข Registration </div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>รหัสนิสิต</strong></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="student_code" value="{{ $reg->student_code }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>รหัสวิชา</strong></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="course_code" value="{{ $reg->course_code }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>เชค</strong></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="section" value="{{ $reg->section }}" class=" form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong></strong>เกรด</label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="grade" value="{{ $reg->grade }}" class=" form-control">
                            </div>
                        </div>
                    </div>
                    <label class="col-sm-4 col-form-label"><strong></strong>เทอม</label>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="text" name="semester" value="{{ $reg->semester }}" class=" form-control">
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