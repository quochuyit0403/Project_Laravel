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
                        <input type="text" name="name" value="{{ $hotel->name }}" class="form-control"  placeholder="Nhập tên khách sạn">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tour</label>
                        <select class="form-control" name="place_id">
                            @foreach($places as $place)
                                <option value="{{ $place->id }}" {{ $hotel->place_id == $place->id ? 'selected' : '' }}>
                                    {{ $place->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Giá gốc</label>
                        <input type="number" name="price" value="{{ $hotel->price }}"  class="form-control" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Giá giảm</label>
                        <input type="number" name="price_sale" value="{{ $hotel->price_sale }}"  class="form-control" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Số điện thoại</label>
                        <input type="number" name="phone" value="{{ $hotel->phone }}"  class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="menu">Đánh giá khách hàng</label>
                        <input type="number" name="star" value="{{ $hotel->star }}"  class="form-control" >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Mô tả </label>
                <textarea name="descriptions" class="form-control">{{ $hotel->descriptions }}</textarea>
            </div>


            <div class="form-group">
                <label for="menu">Ảnh khách sạn</label>
                <input type="file"  class="form-control" id="upload">
                <div id="image_show">
                    <a href="{{ $hotel->thumb }}" target="_blank">
                        <img src="{{ $hotel->thumb }}" width="100px">
                    </a>
                </div>
                <input type="hidden" name="thumb" value="{{ $hotel->thumb }}" id="thumb">
            </div>

            <div class="form-group">
                <label for="menu">Ảnh chi tiết khách sạn</label>
                <input type="file"  class="form-control" id="upload_1">
                <div id="image_show_1">
                    <a href="{{ $hotel->thumb_1 }}" target="_blank">
                        <img src="{{ $hotel->thumb_1 }}" width="100px">
                    </a>
                </div>
                <input type="hidden" name="thumb_1" value="{{ $hotel->thumb_1 }}" id="thumb_1">
            </div>

            <div class="form-group">
                <label for="menu">Ảnh chi tiết khách sạn</label>
                <input type="file"  class="form-control" id="upload_2">
                <div id="image_show_2">
                    <a href="{{ $hotel->thumb_2 }}" target="_blank">
                        <img src="{{ $hotel->thumb_2 }}" width="100px">
                    </a>
                </div>
                <input type="hidden" name="thumb_2" value="{{ $hotel->thumb_2 }}" id="thumb_2">
            </div>

            <div class="form-group">
                <label for="menu">Ảnh chi tiết khách sạn</label>
                <input type="file"  class="form-control" id="upload_3">
                <div id="image_show_3">
                    <a href="{{ $hotel->thumb_3 }}" target="_blank">
                        <img src="{{ $hotel->thumb_3 }}" width="100px">
                    </a>
                </div>
                <input type="hidden" name="thumb_3" value="{{ $hotel->thumb_3 }}" id="thumb_3">
            </div>

            <div class="form-group">
                <label for="menu">Ảnh chi tiết khách sạn</label>
                <input type="file"  class="form-control" id="upload_4">
                <div id="image_show_4">
                    <a href="{{ $hotel->thumb_4 }}" target="_blank">
                        <img src="{{ $hotel->thumb_4 }}" width="100px">
                    </a>
                </div>
                <input type="hidden" name="thumb_4" value="{{ $hotel->thumb_4 }}" id="thumb_4">
            </div>

            <div class="form-group">
                <label>Hoạt động</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active" 
                        {{ $hotel->active == 1 ? 'checked = ""' : '' }}
                    >
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active"
                    {{ $hotel->active == 0 ? 'checked = ""' : '' }} >
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập nhật thông tin khách sạn</button>
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