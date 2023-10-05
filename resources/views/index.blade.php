<x-layouts.frontend title="SMPN 2 PAGUYANGAN">
    @push('plugin-styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    @endpush

    @push('styles')
        <style>
            .bannerSwiper.swiper {
                width: 100%;
                height: 100%;
            }

            .bannerSwiper .swiper-slide {
                text-align: center;
                font-size: 18px;
                background: #fff;
                display: flex;
                justify-content: center;
                align-items: center;

            }

            .bannerSwiper .swiper-slide img {
                display: block;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }



            .bannerSwiper .swiper-pagination-bullet-active {
                background: #114c86;
            }

            @media (max-width: 767px) {
                .bannerSwiper.swiper {
                    width: 95%;
                }
            }
        </style>
    @endpush

    <!-- ======= Slider Section ======= -->
    <x-frontend.banner>
        @foreach ($banners as $banner)
            <div class="swiper-slide">
                <img src="{{ asset($banner->desktop_image) }}" alt="banner"
                    class="d-none d-sm-none d-md-none d-lg-block">
                <img src="{{ asset($banner->mobile_image) }}" alt="banner"
                    class="d-block d-sm-block d-md-block d-lg-none">
            </div>
        @endforeach
    </x-frontend.banner>
    <!-- ======= End Slider Section ======= -->


    @push('plugin-scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    @endpush

    @push('custom-scripts')
        <script>
            var swiper = new Swiper(".bannerSwiper", {
                pagination: {
                    el: ".swiper-pagination",

                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                autoplay: {
                    delay: 3000,
                },
                loop: true,
            });
        </script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 2,
                spaceBetween: 20,
                centeredSlides: false,
                breakpoints: {
                    320: {
                        slidesPerView: 1.2,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                        centeredSlides: true,
                        initialSlide: 1
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                        centeredSlides: false,

                    },
                },

            });
        </script>
    @endpush
</x-layouts.frontend>
