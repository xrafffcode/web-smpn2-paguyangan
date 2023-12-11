<x-layouts.frontend title="{{ $extracurricular->name }}">

    <x-frontend.header>
        <x-slot name="title">
            {{ $extracurricular->name }}
        </x-slot>
        <x-slot name="description">
            <a href="{{ route('extracurricular') }}" class="text-decoration-none text-primary">Ekstrakurikuler</a> /
            {{ $extracurricular->name }}
        </x-slot>
    </x-frontend.header>


    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <img src="{{ asset($extracurricular->image_url) }}" class="img-fluid rounded"
                    alt="{{ $extracurricular->name }}">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-9">
                <table class="table table-striped">
                    <tr>
                        <th>Nama</th>
                        <th>:</th>
                        <td>{{ $extracurricular->name }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <th>:</th>
                        <td>{{ $extracurricular->description }}</td>
                    </tr>
                    <tr>
                        <th>Pembimbing</th>
                        <th>:</th>
                        <td>{{ $extracurricular->teacher->name }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-layouts.frontend>
