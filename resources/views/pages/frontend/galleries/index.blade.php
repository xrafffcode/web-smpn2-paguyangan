<x-layouts.frontend title="Gallery Smp">

    @push('plugin-styles')
        <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/lightbox/css/lightbox.css') }}">
    @endpush

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Gallery</h1>
                    <p class="lead">
                        Berbagai Foto Kegiatan {{ getWebConfiguration()->name }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row ">
            @foreach ($galleries as $gallery)
                <div class="col-md-4 col-sm-6 col-6 mb-3">
                    <a href="{{ asset($gallery->image) }}" class="d-block" data-lightbox="gambar"
                        data-title="{{ $gallery->description }}">
                        <img src="{{ asset($gallery->image) }}" alt="image" class="img-fluid">
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
