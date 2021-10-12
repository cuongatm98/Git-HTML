@extends('backend.layout.master')
@section('content')

    <style>
        #d-flex justify-content-center{
            position: relative;
            float: right;
        }
        th{
            background-color: #bc6af3;
        }
    </style>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="col-sm-6">
                        <h2>Bảng <b>Danh sách sản phẩm</b></h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Giá bán</th>
                                <th colspan="2" style="">Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $key => $product)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>
                                        {{$product->name}}
                                    </td>
                                    <td>
                                        <img  class="mr-2" alt="image" style="width:100px; height:100px" src="{{asset('/storage/'.$product->image)}}">
                                    </td>
                                    <td>
                                        {{$product->price}}Đ
                                    </td>
                                    <td>
                                        <a class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('products.edit', $product->id) }}"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete" href="{{ route('products.destroy', $product->id) }}" onclick="return confirm('Bạn chắc chắn muốn xóa?')"><i class="fa fa-trash"></i></a>
                                    </td>
                                    {{--                                    <td>--}}
                                    {{--                                        <button class="btn btn-outline-success"><a href="{{route('admin.books.create')}} >Sửa</a>--}}
                                    {{--                                        </button>--}}
                                    {{--                                        <button class="btn btn-outline-danger">Xóa</button>--}}
                                    {{--                                    </td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{--                        <div style=" position: relative;float: right;" class="d-flex justify-content-center">--}}
                        {{--                            {!! $products->links() !!}--}}
                        {{--                        </div>--}}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
