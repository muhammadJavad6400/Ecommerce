@extends('admin.layouts.admin')

@section('title')
    Edit Banner
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold mb-3 mb-0">ویرایش بنر : {{ $banner->title }}</h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.banners.update', ['banner' => $banner->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row justify-content-center mb-3">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ url(env('BANNER_IMAGES_UPLOAD_PATH') . $banner->image) }}"
                                alt="{{ $banner->image }}">
                        </div>
                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-3">
                        <label for="bannerImage">انتخاب تصویر</label>
                        <div class="custom-file">
                            <input type="file" name="bannerImage" class="custom-file-input" id="bannerImage">
                            <label class="custom-file-label" for="bannerImage"> انتخاب فایل </label>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="title">عنوان</label>
                        <input class="form-control" id="title" name="title" type="text"
                            value="{{ $banner->title }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="text">متن</label>
                        <input class="form-control" id="text" name="text" type="text"
                            value="{{ $banner->text }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="priority">الویت</label>
                        <input class="form-control" id="priority" name="priority" type="number"
                            value="{{ $banner->priority }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="is_active">وضعیت</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" {{ $banner->getRawOriginal('is_active') ? 'selected' : '' }}>فعال
                            </option>
                            <option value="0" {{ $banner->getRawOriginal('is_active') ? '' : 'selected' }}>غیرفعال
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="type">نوع بنر</label>
                        <input class="form-control" id="type" name="type" type="text"
                            value="{{ $banner->type }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="button_text">متن دکمه</label>
                        <input class="form-control" id="button_text" name="button_text" type="text"
                            value="{{ $banner->button_text }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="button_link">لینک دکمه</label>
                        <input class="form-control" id="button_link" name="button_link" type="text"
                            value="{{ $banner->button_link }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="button_icon">آیکون</label>
                        <input class="form-control" id="button_icon" name="button_icon" type="text"
                            value="{{ $banner->button_icon }}">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-info mt-5" type="submit">ویرایش</button>
                    <a href="{{ route('admin.banners.index') }}" class="btn btn-outline-dark mt-5 mr-3">بازگشت</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // Show File Name
        $('#bannerImage').change(function() {
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        });
    </script>
@endsection
