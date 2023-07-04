@extends('admin.layouts.admin')

@section('title')
    Edit ProductImages
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
            <div class="mb-4">
                <h5 class="font-weight-bold">ویرایش تصاویر محصول : {{ $product->name }}</h5>
            </div>
            <hr>
            @include('admin.sections.errors')

            {{-- Show Primary Image --}}
            <div class="row">
                <div class="col-12 col-md-12 mb-5">
                    <h5>تصویر اصلی</h5>
                </div>
                <div class="col-12 col-md-4 mb-5">
                    <div class="card">
                        <img class="card-img-top" src="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $product->primary_image) }}"
                            alt="{{ $product->name }}">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-md-12 mb-5">
                    <h5>تصاویر محصول</h5>
                </div>
                @foreach ($productImages as $image)
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $image->image) }}"
                                alt="{{ $product->name }}">
                            <div class="card-body text-center">
                                <div class="d-flex justify-content-center">
                                    <form class="ml-2" action="{{ route('admin.products.images.destroy', ['product' => $product->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="imageId" value="{{ $image->id }}">
                                        <button class="btn btn-outline-danger btn-sm mb-3">حذف</button>
                                    </form>
                                    <form
                                        action="{{ route('admin.products.images.set.primary', ['product' => $product->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" name="imageId" value="{{ $image->id }}">
                                        <button class="btn btn-outline-primary btn-sm mb-3">انتخاب به عنوان تصویر
                                            اصلی</button>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <hr>
            <form action="{{ route('admin.products.images.add', ['product' => $product->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-12">
                        <hr>
                        <p>تصاویر محصول : </p>
                        <div class="d-flex justify-content-center">
                            <div class="form-group col-md-4">
                                <label for="primary_image"> انتخاب تصویر اصلی </label>
                                <div class="custom-file">
                                    <input type="file" name="primary_image" class="custom-file-input" id="primary_image">
                                    <label class="custom-file-label" for="primary_image"> انتخاب فایل </label>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="images"> انتخاب تصاویر </label>
                                <div class="custom-file">
                                    <input type="file" name="images[]" multiple class="custom-file-input" id="images">
                                    <label class="custom-file-label" for="images"> انتخاب فایل ها </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-primary mt-5" type="submit">ویرایش</button>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-outline-dark mt-5 mr-3">بازگشت</a>
                </div>
            </form>
        </div>
    </div>
@endsection


@section('script')
    <script>
        // Show File Name
        $('#primary_image').change(function() {
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        });

        $('#images').change(function() {
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        });
    </script>
@endsection
