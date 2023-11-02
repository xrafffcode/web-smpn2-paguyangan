<x-layouts.frontend title="Gallery">

    @push('plugin-styles')
        <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/lightbox/css/lightbox.css') }}">
    @endpush

    <x-frontend.header>
        <x-slot name="title">
            Gallery
        </x-slot>
        <x-slot name="description">
            Berbagai Foto Kegiatan {{ getWebConfiguration()->name }}
        </x-slot>
    </x-frontend.header>

    <div class="container mt-5 mb-5">
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

    @push('plugin-scripts')
        <script src="{{ asset('frontend/assets/plugins/lightbox/js/lightbox-plus-jquery.min.js') }}"></script>

        <script>
            lightbox.option({
                'resizeDuration': 200,
                'wrapAround': true
            })
        </script>
    @endpush
</x-layouts.frontend>
