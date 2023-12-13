@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px;">ID</th>
                <th>Tên Tour du lịch</th>
                <th>Tên địa điểm</th>
                <th>Giá gốc</th>
                <th>Giá ưu đãi</th>
                <th>Đánh giá</th>
                <th>Số ngày du lịch</th>
                <th>Hoạt động</th>
                <th>Cập nhật</th>
                <th style="width: 100px;">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($places as $key => $place)
            <tr>
                <td>{{$place -> id}}</td>
                <td>{{$place -> name}}</td>
                <td>{{$place -> destination -> name}}</td>
                <td>{{$place -> price}}</td>
                <td>{{$place -> price_sale}}</td>
                <td>{{$place -> star}}</td>
                <td>{{$place -> day_number}}</td>
                <td>{!! \App\Helpers\Helpers::active($place->active) !!}</td>
                <td>
                    <a href="/admin/places/edit/ {{$place->id}}" class="btn btn-primary btn-sm">
                        <i class="fas fa-edit"></i>
                    </a>

                    <a href="#" class="btn btn-danger btn-sm"
                        onclick="removeRow('{{ $place->id }}', '/admin/places/destroy')" >
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $places->links() !!}
@endsection