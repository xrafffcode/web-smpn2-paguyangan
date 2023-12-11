<x-layouts.frontend title="Visi Misi">

    <x-frontend.header>
        <x-slot name="title">
            Visi Misi
        </x-slot>
        <x-slot name="description">
            Visi Misi {{ getWebConfiguration()->name }}
        </x-slot>
    </x-frontend.header>


    <div class="container py-5">
        <h6>Visi</h6>
        {!! \Illuminate\Support\Str::markdown(getWebConfiguration()->vision) !!}

        <h6 class="mt-5">Misi</h6>
        {!! \Illuminate\Support\Str::markdown(getWebConfiguration()->mission) !!}
    </div>


</x-layouts.frontend>
