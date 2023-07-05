@extends('admin.layouts.admin')

@section('title')
    Index Banner
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                <h5 class="font-weight-bold mb-3 mb-0">لیست بنر ها ({{ $banners->total() }})</h5>
                <div>
                    <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.banners.create') }}">
                        <i class="fa fa-plus"></i>
                        ایجاد بنر
                    </a>
                </div>
            </div>
            <div>
                <table class="table table-bordered table-stripet text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>تصویر</th>
                            <th>عنوان</th>
                            <th>متن</th>
                            <th>اولویت</th>
                            <th>وضعیت</th>
                            <th>نوع</th>
                            <th>متن دکمه</th>
                            <th>لینک دکمه</th>
                            <th>آیکون دکمه</th>
                            <th>عملیات</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($banners as $key => $banner)
                            <tr>
                                <th>{{ $banners->firstItem() + $key }}</th>
                                <td>
                                    <a target="_blank" href="{{ url(env('BANNER_IMAGES_UPLOAD_PATH'). $banner->image) }}">تصویر بنر</a>
                                </td>
                                <td>{{ $banner->title }}</td>
                                <td>{{ $banner->text }}</td>
                                <td>{{ $banner->priority }}</td>
                                <td>
                                    <span class="{{ $banner->getRawOriginal('is_active') ? 'text-success' : 'text-danger' }}">
                                        {{ $banner->is_active }}
                                    </span>
                                </td>
                                <td>{{ $banner->type }}</td>
                                <td>{{ $banner->butten_text }}</td>
                                <td>{{ $banner->butten_link }}</td>
                                <td>{{ $banner->butten_icon }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            عملیات
                                        </button>
                                        <div class="dropdown-menu">

                                            <a href="{{ route('admin.banners.edit', ['banner' => $banner->id]) }}" class="dropdown-item text-right">ویرایش بنر</a>

                                            <a href="{{ route('admin.banners.show', ['banner' => $banner->id]) }}" class="dropdown-item text-right">نمایش بنر</a>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-5">
                {{ $banners->render() }}
            </div>
        </div>
    </div>
@endsection
