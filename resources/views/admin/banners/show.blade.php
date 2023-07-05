@extends('admin.layouts.admin')

@section('title')
    Show Banner
@endsection


@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold mb-3 mb-0">بنر : {{ $banner->title }}</h5>
            </div>
            <hr>

            <div class="row justify-content-center mb-4">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ url(env('BANNER_IMAGES_UPLOAD_PATH') . $banner->image) }}"
                            alt="{{ $banner->image }}">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="title">عنوان</label>
                    <input class="form-control" id="title" name="title" type="text" value="{{ $banner->title }}"
                        disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="text">متن</label>
                    <input class="form-control" id="text" name="text" type="text" value="{{ $banner->text }}"
                        disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="priority">الویت</label>
                    <input class="form-control" id="priority" name="priority" type="number"
                        value="{{ $banner->priority }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="is_active">وضعیت</label>
                    <input type="text" class="form-control" name="is_active" value="{{ $banner->is_active }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="type">نوع بنر</label>
                    <input class="form-control" id="type" name="type" type="text" value="{{ $banner->type }}"
                        disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="button_text">متن دکمه</label>
                    <input class="form-control" id="button_text" name="button_text" type="text"
                        value="{{ $banner->button_text }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="button_link">لینک دکمه</label>
                    <input class="form-control" id="button_link" name="button_link" type="text"
                        value="{{ $banner->button_link }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="button_icon">آیکون</label>
                    <input class="form-control" id="button_icon" name="button_icon" type="text"
                        value="{{ $banner->button_icon }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="created_at">تاریخ ایجاد</label>
                    <input class="form-control" id="created_at" name="created_at" type="text"
                        value="{{ verta($banner->created_at)}}" disabled>
                </div>
            </div>

            <div class="d-flex justify-content-center ">
                <a href="{{ route('admin.banners.index') }}" class="btn btn-outline-dark mt-5">بازگشت</a>
                <form class="mt-5 mr-3" action="{{ route('admin.banners.destroy', ['banner' => $banner->id]) }}"
                    method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-outline-danger">حذف</button>
                </form>
            </div>
        </div>
    </div>
@endsection
