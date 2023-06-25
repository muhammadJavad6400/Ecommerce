@extends('admin.layouts.admin')

@section('title')

    Edit Brand

@endsection


@section('content')

     <!-- Content Row -->
     <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
            <div class="mb-4">
                <h5 class="font-weight-bold">ویرایش برند : {{ $brand->name }}</h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.brands.update' , ['brand' => $brand->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <div class="d-flex justify-content-center">
                        <div class="form-group col-md-3">
                            <label for="name">نام</label>
                            <input class="form-control" id="name" name="name" type="text" value="{{ $brand->name }}">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="is_active">وضعیت</label>
                            <select class="form-control" id="is_active" name="is_active">
                                <option value="1" {{ $brand->getRawOriginal('is_active') ? 'selected' : '' }}>فعال</option>
                                <option value="0" {{ $brand->getRawOriginal('is_active') ? '' : 'selected' }}>غیرفعال</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="description">توضیحات</label>
                        <textarea class="form-control" name="description" id="description">{{ $brand->description }}</textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-primary mt-5" type="submit">ویرایش</button>
                    <a href="{{ route('admin.brands.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
                </div>

            </form>

        </div>

    </div>

@endsection