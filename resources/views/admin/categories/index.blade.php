@extends('admin.layouts.admin')


@section('title')
    Index Categories
@endsection


@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
            <div class="d-flex justify-content-between mb-4">
                <h5 class="font-weight-bold">لیست دسته بندی ها : ( {{ $categories->total() }})</h5>
                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.categories.create') }}">
                    <i class="fa fa-plus"></i>
                    ایجاد دسته بندی
                </a>
            </div>
            <div>
                <table class="table table-bordered table-stripet text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام</th>
                            <th>نام انگلیسی</th>
                            <th>والد</th>
                            <th>وضعیت</th>
                            <th>عملیات</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($categories as $key => $category)
                            <tr>
                                <th>{{ $categories->firstItem() + $key }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    @if ($category->parent_id == 0)
                                        {{ $category->name }}
                                    @else
                                        {{ $category->parent->name }}
                                    @endif
                                </td>
                                <td>
                                    <span class="{{ $category->getRawOriginal('is_active') ? 'text-success' : 'text-danger' }}">
                                        {{ $category->is_active }}
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-outline-success"
                                        href="{{ route('admin.categories.show', ['category' => $category->id]) }}">نمایش</a>
                                    <a class="btn btn-sm btn-outline-info mr-2"
                                        href="{{ route('admin.categories.edit', ['category' => $category->id]) }}">ویرایش</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
