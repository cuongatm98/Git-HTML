@extends('backend.layout.master')
@section('content')
    <div class="col-12"><h1>Cập nhật sản phẩm</h1></div>
    <div class="col-12">
        <form method="POST" action="{{ route('products.update',$product->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tên sản phẩm</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>Ảnh</label>
                <div class="col-sm-9">
                    <input type="file" name="image" class="form-control-file" >
                </div>
            </div>
            <div class="form-group">
                <label>Giá sản phẩm</label>
                <div class="col-sm-9">
                    <input type="text" name="price" class="form-control"  value="{{ $product->price }}" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </div>
@endsection


