@extends('layouts.app')

@section('content')

<style>
body {
    background-image: url('https://g-grafolio.pstatic.net/20220824_261/1661346480021bV6jU_JPEG/2022_07_24_%BF%A9%B8%A7%C0%CC.jpg');
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
    @foreach( $department as $dp)
    @endforeach

    <div class="row justify-content-center">
        <div class="card">
            <form name="create" method="POST" action=" {{ route('department.update',$dp->dept_code); }}">
                @csrf
                @method('PUT')
                <div class="card-header">แก้ไข Department</div>
                <div class="card-body">

                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>รหัสแผนก</strong></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="dept_code" readonly value="{{ $dp->dept_code }}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>ชื่อ</strong></label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="dept_name" value="{{ $dp->dept_name }}" class="form-control">
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