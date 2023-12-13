@extends('admin.main')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Tên khách sạn</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"  placeholder="Nhập tên khách sạn">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tour</label>
                        <select class="form-control" name="place_id">
                            @foreach($places as $place)
                                <option value="{{ $place->id }}">{{ $place->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Giá gốc</label>
                        <input type="number" name="price" value="{{ old('price') }}"  class="form-control" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Giá giảm</label>
                        <input type="number" name="price_sale" value="{{ old('price_sale') }}"  class="form-control" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Số điện thoại</label>
                        <input type="number" name="phone" value="{{ old('phone') }}"  class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="menu">Đánh giá khách hàng</label>
                        <input type="number" name="star" value="{{ old('star') }}"  class="form-control" >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Mô tả </label>
                <textarea name="descriptions" class="form-control">{{ old('description') }}</textarea>
            </div>


            <div class="form-group">
                <label for="menu">Ảnh khách sạn</label>
                <input type="file"  class="form-control" id="upload">
                <div id="image_show">

                </div>
                <input type="hidden" name="thumb" id="thumb">
            </div>

            <div class="form-group">
                <label for="menu">Ảnh chi tiết khách sạn</label>
                <input type="file"  class="form-control" id="upload_1">
                <div id="image_show_1">

                </div>
                <input type="hidden" name="thumb_1" id="thumb_1">
            </div>

            <div class="form-group">
                <label for="menu">Ảnh chi tiết khách sạn</label>
                <input type="file"  class="form-control" id="upload_2">
                <div id="image_show_2">

                </div>
                <input type="hidden" name="thumb_2" id="thumb_2">
            </div>

            <div class="form-group">
                <label for="menu">Ảnh chi tiết khách sạn</label>
                <input type="file"  class="form-control" id="upload_3">
                <div id="image_show_3">

                </div>
                <input type="hidden" name="thumb_3" id="thumb_3">
            </div>
            
            <div class="form-group">
                <label for="menu">Ảnh chi tiết khách sạn</label>
                <input type="file"  class="form-control" id="upload_4">
                <div id="image_show_4">

                </div>
                <input type="hidden" name="thumb_4" id="thumb_4">
            </div>

            <div class="form-group">
                <label>Hoạt động</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm khách sạn</button>
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