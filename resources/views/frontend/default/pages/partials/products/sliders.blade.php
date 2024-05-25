{{--  <div class="quickview-double-slider">
    @php
        $galleryImages = explode(',', $product->gallery_images);
    @endphp
    <div class="quickview-product-slider swiper">
        <div class="swiper-wrapper">
            @foreach ($galleryImages as $galleryImage)
                <div class="swiper-slide text-center">
                    <img src="{{ uploadedAsset($galleryImage) }}" alt="{{ $product->collectLocalization('name') }}"
                        class="img-fluid">
                </div>
            @endforeach
        </div>
    </div>
    <div class="product-thumbnail-slider swiper mt-80">
        <div class="swiper-wrapper">
            @foreach ($galleryImages as $galleryImage)
                <div
                    class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                    <img src="{{ uploadedAsset($galleryImage) }}?thumb"
                        alt="{{ $product->collectLocalization('name') }}" class="img-fluid">
                </div>
            @endforeach

        </div>
    </div>
</div>  --}}

<ul class="newzomm">
    <li class="newzoom1"><img src="{{ staticAsset('frontend/default/assets/img/blog/blog-thumb-1.jpg') }}"
            class="small_img"></li>
    <li class="newzoom1"> <img src="{{ staticAsset('frontend/default/assets/img/blog/blog-thumb-2.jpg') }}"
            class="small_img"></li>
    <li class="newzoom1"><img src="{{ staticAsset('frontend/default/assets/img/blog/blog-thumb-3.jpg') }}"
            class="small_img"></li>
    <li class="newzoom1"><img src="{{ staticAsset('frontend/default/assets/img/blog/blog-thumb-4.jpg') }}"
            class="small_img"></li>

    </li>
</ul>
<img src="{{ staticAsset('frontend/default/assets/img/blog/blog-thumb-2.jpg') }}" class="big_img">
