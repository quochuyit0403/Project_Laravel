@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px;">ID</th>
                <th>Tên khách sạn</th>
                <th>Tour</th>
                <th>Giá gốc</th>
                <th>Giá ưu đãi</th>
                <th>Hoạt động</th>
                <th>Cập nhật</th>
                <th style="width: 100px;">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hotels as $key => $hotel)
            <tr>
                <td>{{$hotel -> id}}</td>
                <td>{{$hotel -> name}}</td>
                <td>{{$hotel -> place -> name}}</td>
                <td>{{$hotel -> price}}</td>
                <td>{{$hotel -> price_sale}}</td>
                <td>{!! \App\Helpers\Helpers::active($hotel->active) !!}</td>
                <td>
                    <a href="/admin/hotels/edit/ {{$hotel->id}}" class="btn btn-primary btn-sm">
                        <i class="fas fa-edit"></i>
                    </a>

                    <a href="#" class="btn btn-danger btn-sm"
                        onclick="removeRow('{{ $hotel->id }}', '/admin/hotels/destroy')" >
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $hotels->links() !!}
@endsection