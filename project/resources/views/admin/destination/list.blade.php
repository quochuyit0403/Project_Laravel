@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px;">ID</th>
                <th>Tên địa điểm</th>
                <th>Hoạt động</th>
                <th>Cập nhật</th>
                <th style="width: 100px;">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            {!! \App\Helpers\Helpers::destination($destinations) !!}
        </tbody>
    </table>
@endsection