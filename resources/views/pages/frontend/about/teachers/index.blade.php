<x-layouts.frontend title="Guru">

    <x-frontend.header>
        <x-slot name="title">
            Guru
        </x-slot>
        <x-slot name="description">
            Guru yang ada di {{ getWebConfiguration()->name }}
        </x-slot>
    </x-frontend.header>


    <div class="container mt-5 mb-5">
        <div class="row justify-content-center align-items-center g-2">
            @foreach ($teachers as $teacher)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm card-teacher">
                        <img src="{{ asset($teacher->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">{{ $teacher->name }}</h3>
                            <div class="badge bg-primary">{{ $teacher->position }}</div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</x-layouts.frontend>
