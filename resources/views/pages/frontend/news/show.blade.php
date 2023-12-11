<x-layouts.frontend title="Berita">

    <x-frontend.header>
        <x-slot name="title">
            {{ $news->title }}
        </x-slot>
        <x-slot name="description">
            {{ $news->description }}
        </x-slot>
    </x-frontend.header>


    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center flex-column align-items-center">
            <img src="{{ asset($news->thumbnail) }}" class="img-fluid rounded" alt="{{ $news->title }}" width="600">
            <article class="mt-4">
                {!! \Illuminate\Support\Str::markdown($news->content) !!}
            </article>
        </div>
    </div>


</x-layouts.frontend>
