@extends('admin.layouts.admin')


@section('title')
    Create Brands
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold mb-3 mb-0">ایجاد برند</h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="d-flex justify-content-center">
                        <div class="form-group col-md-3">
                            <label for="name">نام</label>
                            <input class="form-control" id="name" name="name" type="text"
                                value="{{ old('name') }}">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="is_active">وضعیت</label>
                            <select class="form-control" id="is_active" name="is_active">
                                <option value="1" selected>فعال</option>
                                <option value="0">غیرفعال</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="description">توضیحات</label>
                        <textarea class="form-control" name="description" id="description">{{ old('description') }}</textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-success mt-5" type="submit">ثبت</button>
                    <a href="{{ route('admin.brands.index') }}" class="btn btn-outline-dark mt-5 mr-3">بازگشت</a>
                </div>

            </form>

        </div>

    </div>
@endsection
