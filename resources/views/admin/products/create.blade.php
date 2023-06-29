@extends('admin.layouts.admin')

@section('title')
    Product Create
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
            <div class="mb-4">
                <h5 class="font-weight-bold">ایجاد محصول</h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <p>عنوان محصول: </p>
                <div class="form-row">

                    <div class="form-group col-md-3">
                        <label for="name">نام</label>
                        <input class="form-control" id="name" name="name" type="text"
                            value="{{ old('name') }}">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="brand_id">برند</label>
                        <select id="brandSelect" name="brand_id" class="form-control" data-live-search="true">

                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="tag_ids">تگ ها</label>
                        <select id="tagSelect" name="tag_ids[]" class="form-control" multiple data-live-search="true">

                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="is_active">وضعیت</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" selected>فعال</option>
                            <option value="0">غیرفعال</option>
                        </select>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="description">توضیحات</label>
                        <textarea class="form-control" name="description" id="description">{{ old('description') }}</textarea>
                    </div>

                    {{-- Product Image Section --}}

                    <div class="col-md-12">
                        <hr>
                        <p>تصاویر محصول : </p>
                        <div class="d-flex justify-content-center">
                            <div class="form-group col-md-3">
                                <label for="primary_image"> انتخاب تصویر اصلی </label>
                                <div class="custom-file">
                                    <input type="file" name="primary_image" class="custom-file-input" id="primary_image">
                                    <label class="custom-file-label" for="primary_image"> انتخاب فایل </label>
                                </div>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="images"> انتخاب تصاویر </label>
                                <div class="custom-file">
                                    <input type="file" name="images[]" multiple class="custom-file-input" id="images">
                                    <label class="custom-file-label" for="images"> انتخاب فایل ها </label>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Product Categories and Attributes Section --}}

                    <div class="col-md-12">
                        <hr>
                        <p>دسته بندی و ویژگی ها : </p>
                    </div>

                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="form-group col-md-3">
                                <label for="category_id">دسته بندی</label>
                                <select id="categorySelect" name="category_id" class="form-control" data-live-search="true">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }} -
                                            {{ $category->parent->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>


                    <div id="attributesContainer" class="col-md-12">
                        <div id="attributeEachCategory" class="row"></div>
                        <div class="col-md-12">
                            <hr>
                            <p>افزودن قیمت و موجودی برای متغیر <span id="variationName" class="font-weight-bold"></span>:
                            </p>
                        </div>

                        <div id="czContainer">
                            <div id="first">
                                <div class="recordset">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>نام</label>
                                            <input class="form-control" name="variation_values[value][]" type="text">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>قیمت</label>
                                            <input class="form-control" name="variation_values[price][]" type="text">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>تعداد</label>
                                            <input class="form-control" name="variation_values[quantity][]" type="text">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>شناسه انبار</label>
                                            <input class="form-control" name="variation_values[sku][]" type="text">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

                <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
                </div>


            </form>

        </div>

    </div>
@endsection


@section('script')
    <script>
        $('#brandSelect').selectpicker({
            'title': 'انتخاب برند'
        });

        $('#tagSelect').selectpicker({
            'title': 'انتخاب تگ'
        });

        $('#categorySelect').selectpicker({
            'title': 'انتخاب دسته بندی'
        });

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


        $('#attributesContainer').hide();
        $('#categorySelect').on('changed.bs.select', function() {
            let categoryId = $(this).val();

            $.get(`{{ url('/admin-panel/management/category-attributes-list/${categoryId}') }}`, function(response,
                status) {
                if (status == 'success') {
                    //console.log(response);

                    $('#attributesContainer').fadeIn();
                    // Empty Attribute Container
                    $('#attributeEachCategory').find('div').remove();

                    // Create&Append Attribute Input For Each Category
                    response.attributes.forEach(attribute => {

                        let attributeFormGroup = $('<div/>', {
                            class: 'form-group col-md-3'
                        });

                        attributeFormGroup.append($('<lable/>', {
                            for: attribute.name,
                            text: attribute.name
                        }));

                        attributeFormGroup.append($('<input/>', {
                            type: 'text',
                            class: 'form-control',
                            id: attribute.name,
                            name: `attribute_ids[${attribute.id}]`
                        }));


                        $('#attributeEachCategory').append(attributeFormGroup);
                    })


                    $('#variationName').text(response.variation.name);







                } else {
                    alert('مشکل در دریافت لیست ویژگی ها');
                }
            }).fail(function() {
                alert('مشکل در دریافت لیست ویژگی ها')
            });
        });

        $("#czContainer").czMore();
    </script>
@endsection
