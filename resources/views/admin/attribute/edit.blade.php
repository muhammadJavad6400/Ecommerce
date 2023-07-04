@extends('admin.layouts.admin')

@section('title')
    Edit Attribute
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
            <div class="mb-4">
                <h5 class="font-weight-bold">ویرایش ویژگی</h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.attributes.update' , ['attribute' => $attribute->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <div class="d-flex justify-content-center">
                        <div class="form-group col-md-3">
                            <label for="name">نام</label>
                            <input class="form-control" id="name" name="name" type="text" value="{{ $attribute->name }}">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-primary mt-5" type="submit">ویرایش</button>
                    <a href="{{ route('admin.attributes.index') }}" class="btn btn-outline-dark mt-5 mr-3">بازگشت</a>
                </div>

            </form>

        </div>

    </div>
@endsection
