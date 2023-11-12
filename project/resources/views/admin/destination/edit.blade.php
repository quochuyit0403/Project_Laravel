@extends('admin.main')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
<form action="" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="menu">Tên địa điểm</label>
                <input type="text" name="name" class="form-control" value="{{$destination->name}}"  placeholder="Nhập tên địa điểm">
            </div>

            <div class="form-group">
                <label for="menu">Điểm đến</label>
                <select class="form-control" name="parent_id">
                    <option value="0" {{ $destination->parent_id == 0 ? 'selected' : '' }}>Quận</option>
                    @foreach($destinations as $menuParent)
                        <option value="{{ $menuParent->id }}"
                            {{ $destination->parent_id == $menuParent->id ? 'selected' : '' }}>
                            {{ $menuParent->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="menu">Mô Tả </label>
                <textarea name="description" class="form-control" placeholder="Mô tả ngắn gọn">{{$destination->description}}</textarea>
            </div>

            <div class="form-group">
                <label>Mô Tả Chi Tiết</label>
                <textarea name="content" id="content" class="form-control">{{$destination->content}}</textarea>
            </div>


            <div class="form-group">
                <label>Hoạt động</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active"
                    name="active" {{ $destination->active == 1 ? 'checked="" ' : '' }}>
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" 
                    name="active"{{ $destination->active == 0 ? 'checked="" ' : '' }} >
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập nhật địa điểm</button>
        </div>
        
        @csrf
    </form>
@endsection

@section('footer')
    <script>
        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection