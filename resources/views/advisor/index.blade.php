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
            <div class="card-header">Advisor <a href="{{ route('advisor.create'); }}">Add</a>
            </div>
            <div class="card-body">
                <table border=1>
                    <tr>
                        <td>รหัสที่ปรึกษา</td>
                        <td>ชื่อที่ปรึกษา</td>
                        <td>รหัสแผนก</td>
                        <td>เลขเจ้าหน้าที่</td>
                        <td>การดำเนินการ</td>
                    </tr>
                    @foreach ($advisor as $ad)
                    <tr>
                        <td>{{ $ad->advisor_code }}</td>
                        <td>{{ $ad->advisor_name }}</td>
                        <td>{{ $ad->dept_code }}</td>
                        <td>{{ $ad->office_tel}}</td>
                        <td>
                            <form method="POST" action="{{ route('advisor.destroy',$ad->advisor_code) }}">
                                <a class='btn btn-primary'
                                    href="{{ route('advisor.edit',$ad->advisor_code); }}">Edit</a>

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