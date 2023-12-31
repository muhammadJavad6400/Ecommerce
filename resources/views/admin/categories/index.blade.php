@extends('admin.layouts.admin')


@section('title')
    Index Categories
@endsection


@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                <h5 class="font-weight-bold mb-3 mb-0">لیست دسته بندی ها : ( {{ $categories->total() }})</h5>
                <div>
                    <a class="btn btn-md btn-outline-primary" href="{{ route('admin.categories.create') }}">
                        <i class="fa fa-plus"></i>
                        ایجاد دسته بندی
                    </a>
                </div>
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
                                        بدون والد
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
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            عملیات
                                        </button>
                                        <div class="dropdown-menu">

                                            <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}" class="dropdown-item text-right">ویرایش دسته بندی</a>

                                            <a href="{{ route('admin.categories.show', ['category' => $category->id]) }}" class="dropdown-item text-right">نمایش دسته بندی</a>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-5">
                {{ $categories->render() }}
            </div>
        </div>
    </div>
@endsection
