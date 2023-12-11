<x-layouts.frontend title="Berita">

    <x-frontend.header>
        <x-slot name="title">
            Berita
        </x-slot>
        <x-slot name="description">
            Berita yang ada di {{ getWebConfiguration()->name }}
        </x-slot>
    </x-frontend.header>


    <div class="container mt-5 mb-5">
        <x-frontend.card.news :news="$news" />
        <div class="d-flex justify-content-center mt-3">
            {!! $news->links() !!}
        </div>
    </div>


</x-layouts.frontend>
