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
    <div class="row justify-content-center">

        <div class="card">
            <div class="card-header">Department <a href="{{ route('department.create'); }}">Add</a>
            </div>
            <div class="card-body">
                <table border=1>
                    <tr>
                        <td>สาขา</td>
                        <td>ชื่อสาขา</td>
                        <td>การดำเนินการ</td>
                    </tr>
                    @foreach ($department as $dp)
                    <tr>
                        <td>{{ $dp->dept_code }}</td>
                        <td>{{ $dp->dept_name }}</td>

                        <td>
                            <form method="POST" action="{{ route('department.destroy',$dp->dept_code) }}">
                                <a class='btn btn-primary'
                                    href="{{ route('department.edit',$dp->dept_code); }}">Edit</a>

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