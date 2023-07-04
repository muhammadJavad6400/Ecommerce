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
                        <img class="card-img-top" src="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $product->primary_image) }}" alt="{{ $product->name }}">
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
                    </div>
                </div>
            @endforeach
            </div>
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

