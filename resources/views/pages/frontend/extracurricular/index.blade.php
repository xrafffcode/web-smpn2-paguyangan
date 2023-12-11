<x-layouts.frontend title="Ekstrakurikuler">

    <x-frontend.header>
        <x-slot name="title">
            Ekstrakurikuler
        </x-slot>
        <x-slot name="description">
            Ekstrakurikuler yang ada di {{ getWebConfiguration()->name }}
        </x-slot>
    </x-frontend.header>


    <div class="container mt-5 mb-5">
        <div class="row justify-content-center align-items-center">
            @foreach ($extracurriculars as $extracurricular)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm card-eskul">
                        <img src="{{ asset($extracurricular->image_url) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $extracurricular->name }}</h5>
                            <p class="card-text">{{ $extracurricular->description }}</p>
                            <a href="{{ route('extracurricular.show', $extracurricular->id) }}"
                                class="btn btn-primary btn-sm mt-3">Lihat Detail</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</x-layouts.frontend>
