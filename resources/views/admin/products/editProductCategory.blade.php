@extends('admin.layouts.admin')

@section('title')
    Edit Product Category
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold mb-3 mb-0">ویرایش دسته بندی محصول</h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.products.category.update', ['product' => $product->id]) }}" method="POST">
                @csrf
                @method('put')
                <p>عنوان محصول: {{ $product->name }} </p>
                <div class="form-row">

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
                                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : ''}}>{{ $category->name }} -
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
                    <button class="btn btn-outline-info mt-5" type="submit">ویرایش</button>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-outline-dark mt-5 mr-3">بازگشت</a>
                </div>


            </form>

        </div>

    </div>
@endsection


@section('script')
    <script>
        $('#categorySelect').selectpicker({
            'title': 'انتخاب دسته بندی'
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
