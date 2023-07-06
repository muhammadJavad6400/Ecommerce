@extends('admin.layouts.admin')

@section('title')
    Index Brands
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                <h5 class="font-weight-bold mb-3 mb-0">لیست برند ها ({{ $brands->total() }})</h5>
                <div>
                    <a class="btn btn-md btn-outline-primary" href="{{ route('admin.brands.create') }}">
                        <i class="fa fa-plus"></i>
                        ایجاد برند
                    </a>
                </div>
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
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            عملیات
                                        </button>
                                        <div class="dropdown-menu">

                                            <a href="{{ route('admin.brands.edit', ['brand' => $brand->id]) }}" class="dropdown-item text-right">ویرایش برند</a>

                                            <a href="{{ route('admin.brands.show', ['brand' => $brand->id]) }}" class="dropdown-item text-right">نمایش برند</a>

                                        </div>
                                    </div>
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
