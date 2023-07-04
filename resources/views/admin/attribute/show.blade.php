@extends('admin.layouts.admin')

@section('title')
    Show Attribute
@endsection


@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold mb-3 mb-0">ویژگی : {{ $attribute->name }}</h5>
            </div>
            <hr>

            <div>
                <div class="d-flex justify-content-center ">
                    <div class="form-group col-md-3">
                        <label>نام</label>
                        <input class="form-control" type="text" value="{{ $attribute->name }}" disabled>
                    </div>
                    <div class="form-group col-md-3">
                        <label>تاریخ ایجاد</label>
                        <input class="form-control" type="text" value="{{ verta($attribute->created_at) }}" disabled>
                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-center ">

                <a href="{{ route('admin.attributes.index') }}" class="btn btn-outline-dark mt-5">بازگشت</a>

                <form class="mt-5 mr-3" action="{{ route('admin.attributes.destroy' , ['attribute' => $attribute->id]) }}" method="POST">
                    @csrf
                    @method('delete')

                    <button class="btn btn-outline-danger">حذف</button>

                </form>
            </div>
        </div>

    </div>
@endsection
