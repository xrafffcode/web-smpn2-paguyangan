<x-layouts.frontend title="{{ getWebConfiguration()->name }}">
    @push('plugin-styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/lightbox/css/lightbox.css') }}">
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
                    width: 100%;
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

    <div class="container py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <h3 class="text-center">
                    Selamat Datang di Website <br> {{ getWebConfiguration()->name }}
                </h3>
            </div>
            <div class="col-12 col-md-6 col-lg-8 mb-3">
                <h6>
                    {{ getWebConfiguration()->name }} adalah {{ getWebConfiguration()->description }}
                </h6>
            </div>
        </div>
    </div>

    <!-- ======= News Section ======= -->
    <div class="container">
        <x-frontend.card.news :news="$news" />
    </div>
    <!-- ======= End News Section ======= -->

    <div class="mt-5 py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <img src="https://via.placeholder.com/300x300" alt="placeholder" class="img-fluid rounded-2">
                </div>
                <div class="col-12 col-md-6 col-lg-8 mb-3">
                    <div class="badge bg-primary text-white mb-3">
                        Sambutan Kepala Sekolah
                    </div>
                    <p>
                        Salam. Halo Bapak Ibu Guru, para siswa, dan ayah bunda, apa kabar? Semoga semuanya sehat, tetap
                        semangat, optimis, dan gembira dalam aktivitas masing-masing. Marilah kita senantiasa bersyukur
                        kepada Tuhan bahwasannya kita semua masih diperbolehkan menghirup nafas kehidupan, masih
                        diperbolehkan berkumpul dengan orang-orang yang kita sayangi, dan masih boleh melakukan
                        aktivitas kita meskipun dalam situasi dan kondisi yang berbeda dari biasanya.
                        <br>
                        <br>
                        Saya mengucapkan terima kasih yang setulus-tulusnya atas kerja sama yang baik antara keluarga
                        dengan sekolah selama pandemi covid-19 ini
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Gallery Section ======= -->
    <div class="container py-5">
        <div class="row ">
            @foreach ($galleries as $gallery)
                <div class="col-md-4 col-sm-6 col-6 mb-3">
                    <a href="{{ asset($gallery->image) }}" class="d-block" data-lightbox="gambar"
                        data-title="{{ $gallery->description }}">
                        <img src="{{ asset($gallery->image) }}" alt="image" class="img-gallery">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- ======= End Gallery Section ======= -->

    @push('plugin-scripts')
        <script src="{{ asset('frontend/assets/plugins/lightbox/js/lightbox-plus-jquery.min.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    @endpush

    @push('custom-scripts')
        <script>
            lightbox.option({
                'resizeDuration': 200,
                'wrapAround': true
            })
        </script>
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
