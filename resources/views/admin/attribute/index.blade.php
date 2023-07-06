@extends('admin.layouts.admin')

@section('title')
    Index Attribute
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                <h5 class="font-weight-bold mb-3 mb-0">لیست ویژگی ها ({{ $attributes->total() }})</h5>
                <div class="">
                    <a class="btn btn-md btn-outline-primary" href="{{ route('admin.attributes.create') }}">
                        <i class="fa fa-plus"></i>
                        ایجاد ویژگی
                    </a>
                </div>
            </div>
            <div>
                <table class="table table-bordered table-stripet text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام</th>
                            <th>عملیات</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($attributes as $key => $attribute)
                            <tr>
                                <th>{{ $attributes->firstItem() + $key }}</th>
                                <td>{{ $attribute->name }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            عملیات
                                        </button>
                                        <div class="dropdown-menu">

                                            <a href="{{ route('admin.attributes.edit', ['attribute' => $attribute->id]) }}" class="dropdown-item text-right">ویرایش ویژگی</a>

                                            <a href="{{ route('admin.attributes.show', ['attribute' => $attribute->id]) }}" class="dropdown-item text-right">نمایش ویژگی</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-5">
                {{ $attributes->render() }}
            </div>
        </div>
    </div>
    @endsection
