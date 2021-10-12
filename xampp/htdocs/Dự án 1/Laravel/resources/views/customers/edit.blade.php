@extends('layouts.master')
@section('title', 'Chỉnh sửa khách hàng')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>Chỉnh sửa khách hàng</h1></div>
            <div class="col-12">
                <form method="post" action="{{ route('customers.update', $customer->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <label>
                            <input type="text" class="form-control" name="name" value="{{ $customer->name }}" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <label>
                            <input type="email" class="form-control" name="email" value="{{ $customer->email }}" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <label>
                            <input type="date" class="form-control" name="dob" value="{{ $customer->dob }}" required>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
