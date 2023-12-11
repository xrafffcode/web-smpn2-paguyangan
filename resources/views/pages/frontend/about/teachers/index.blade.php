<x-layouts.frontend title="Guru dan Karyawan">

    <x-frontend.header>
        <x-slot name="title">
            Guru dan Karyawan
        </x-slot>
        <x-slot name="description">
            Guru dan Karyawan yang ada di {{ getWebConfiguration()->name }}
        </x-slot>
    </x-frontend.header>


    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            @foreach ($teachers as $teacher)
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="card border-0 card-teacher"
                        onclick="window.location.href='{{ route('teacher.show', $teacher->id) }}'">
                        <div class="card-body">
                            <img src="{{ asset($teacher->image) }}" class="card-img-teacher mb-3"
                                alt="{{ $teacher->name }}">
                            <h6 class="card-title text-center">{{ $teacher->name }}</h6>
                            <p class="card-text text-center">{{ $teacher->position }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.frontend>
