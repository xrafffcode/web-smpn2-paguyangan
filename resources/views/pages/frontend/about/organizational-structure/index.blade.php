<x-layouts.frontend title="Struktur Organisasi">

    <x-frontend.header>
        <x-slot name="title">
            Struktur Organisasi
        </x-slot>
        <x-slot name="description">
            Struktur Organisasi {{ getWebConfiguration()->name }}
        </x-slot>
    </x-frontend.header>


    <div class="container py-5 d-flex justify-content-center align-items-center">
        <img src="{{ asset(getWebConfiguration()->organization_structure) }}" class="img-fluid shadow-sm"
            alt="Struktur Organisasi" width="80%">
    </div>
</x-layouts.frontend>
