@extends('admin.layouts.admin')

@section('title')
    Show Brand
@endsection


@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold mb-3 mb-0">برند : {{ $brand->name }}</h5>
            </div>
            <hr>

            <div>
                <div class="d-flex justify-content-center ">
                    <div class="form-group col-md-3">
                        <label>نام</label>
                        <input class="form-control" type="text" value="{{ $brand->name }}" disabled>
                    </div>
                    <div class="form-group col-md-3">
                        <label>وضعیت</label>
                        <input class="form-control" type="text" value="{{ $brand->is_active }}" disabled>
                    </div>
                    <div class="form-group col-md-3">
                        <label>تاریخ ایجاد</label>
                        <input class="form-control" type="text" value="{{ verta($brand->created_at) }}" disabled>
                    </div>
                </div>


                <div class="form-group col-md-12">
                    <label for="description">توضیحات</label>
                    <textarea class="form-control" name="description" id="description" disabled >{{ $brand->description }}</textarea>
                </div>

            </div>

            <div class="d-flex justify-content-center ">

                <a href="{{ route('admin.brands.index') }}" class="btn btn-outline-dark mt-5">بازگشت</a>

                <form class="mt-5 mr-3" action="{{ route('admin.brands.destroy' , ['brand' => $brand->id]) }}" method="POST">
                    @csrf
                    @method('delete')

                    <button class="btn btn-outline-danger">حذف</button>

                </form>
            </div>
        </div>

    </div>
@endsection
