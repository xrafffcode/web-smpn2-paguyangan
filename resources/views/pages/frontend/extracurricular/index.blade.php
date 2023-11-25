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
        <div class="row justify-content-center align-items-center g-2">
            @foreach ($extracurriculars as $extracurricular)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm card-eskul">
                        <img src="{{ asset($extracurricular->image_url) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">{{ $extracurricular->name }}</h3>
                            <p class="card-text">{{ $extracurricular->description }}</p>
                            {{-- <a href="{{ route('extracurricular.detail', $extracurricular->id) }}"
                                class="btn btn-primary">Lihat Detail</a> --}}

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</x-layouts.frontend>
