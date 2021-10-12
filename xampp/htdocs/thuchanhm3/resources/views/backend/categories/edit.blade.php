@extends('backend.layout.master')
@section('content')
    <div class="col-12"><h1>Cập nhật thể loại</h1></div>
    <div class="col-12">
        <form method="POST" action="{{ route('categories.update',$category->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tên thể loại</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" value="{{ $category->name }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <div class="col-sm-9">
                    <input type="text" name="description" class="form-control"  value="{{ $category->description }}" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </div>
@endsection



