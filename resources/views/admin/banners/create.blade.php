@extends('admin.layouts.admin')

@section('title')
    Create Banner
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold mb-3 mb-0">ایجاد بنر</h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="banner_image">انتخاب تصویر</label>
                        <div class="custom-file">
                            <input type="file" name="banner_image" class="custom-file-input" id="banner_image">
                            <label class="custom-file-label" for="banner_image"> انتخاب فایل </label>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="title">عنوان</label>
                        <input class="form-control" id="title" name="title" type="text"
                            value="{{ old('title') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="text">متن</label>
                        <input class="form-control" id="text" name="text" type="text"
                            value="{{ old('text') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="priority">الویت</label>
                        <input class="form-control" id="priority" name="priority" type="number"
                            value="{{ old('priority') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="is_active">وضعیت</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" selected>فعال</option>
                            <option value="0">غیرفعال</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="type">نوع بنر</label>
                        <input class="form-control" id="type" name="type" type="text"
                            value="{{ old('type') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="butten_text">متن دکمه</label>
                        <input class="form-control" id="butten_text" name="butten_text" type="text"
                            value="{{ old('butten_text') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="butten_link">لینک دکمه</label>
                        <input class="form-control" id="butten_link" name="butten_link" type="text"
                            value="{{ old('butten_link') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="butten_icon">آیکون</label>
                        <input class="form-control" id="butten_icon" name="butten_icon" type="text"
                            value="{{ old('butten_icon') }}">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-success mt-5" type="submit">ثبت</button>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-outline-dark mt-5 mr-3">بازگشت</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // Show File Name
        $('#banner_image').change(function() {
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        });
    </script>
@endsection
