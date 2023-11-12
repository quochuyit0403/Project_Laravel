@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px;">ID</th>
                <th>Tiêu đề</th>
                <th>Đường dẫn</th>
                <th>Ảnh</th>
                <th>Hoạt động</th>
                <th>Cập nhật</th>
                <th style="width: 100px;">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sliders as $key => $slider)
            <tr>
                <td>{{$slider -> id}}</td>
                <td>{{$slider -> name}}</td>
                <td>{{$slider -> url}}</td>
                <td>
                    <a href="{{ $slider->thumb}}" target="_blank">
                        <img src="{{$slider->thumb}}" height="50px">
                    </a>
                </td>
                <td>{!! \App\Helpers\Helpers::active($slider->active) !!}</td>
                <td>{{$slider->updated_at}}</td>

                <td>
                    <a href="/admin/sliders/edit/ {{$slider->id}}" class="btn btn-primary btn-sm">
                        <i class="fas fa-edit"></i>
                    </a>

                    <a href="#" class="btn btn-danger btn-sm"
                        onclick="removeRow('{{ $slider->id }}', '/admin/sliders/destroy')" >
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $sliders->links() !!}
@endsection