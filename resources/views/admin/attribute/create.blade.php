@extends('admin.layouts.admin')

@section('title')
    Attribute Create
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold mb-3 mb-0">ایجاد ویژگی</h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.attributes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="d-flex justify-content-center">
                        <div class="form-group col-md-3">
                            <label for="name">نام</label>
                            <input class="form-control" id="name" name="name" type="text"
                                value="{{ old('name') }}">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-success mt-5" type="submit">ثبت</button>
                    <a href="{{ route('admin.attributes.index') }}" class="btn btn-outline-dark mt-5 mr-3">بازگشت</a>
                </div>

            </form>

        </div>

    </div>
@endsection
