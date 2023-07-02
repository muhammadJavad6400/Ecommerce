@extends('admin.layouts.admin')

@section('title')
    Index Brands
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
            <div class="d-flex justify-content-between mb-4">
                <h5 class="font-weight-bold">لیست برند ها ({{ $brands->total() }})</h5>
                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.brands.create') }}">
                    <i class="fa fa-plus"></i>
                    ایجاد برند
                </a>
            </div>
            <div>
                <table class="table table-bordered table-stripet text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام</th>
                            <th>وضعیت</th>
                            <th>عملیات</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($brands as $key => $brand)
                            <tr>
                                <th>{{ $brands->firstItem() + $key }}</th>
                                <td>{{ $brand->name }}</td>
                                <td>
                                    <span class="{{ $brand->getRawOriginal('is_active') ? 'text-success' : 'text-danger' }}">
                                        {{ $brand->is_active }}
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-outline-success" href="{{ route('admin.brands.show' , ['brand' => $brand->id]) }}">نمایش</a>
                                    <a class="btn btn-sm btn-outline-info mr-2" href="{{ route('admin.brands.edit' , ['brand' => $brand->id]) }}">ویرایش</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-5">
                {{ $brands->render() }}
            </div>
        </div>
    </div>
    @endsection
