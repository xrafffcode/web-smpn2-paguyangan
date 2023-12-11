<x-layouts.frontend title="{{ $teacher->name }}">

    <x-frontend.header>
        <x-slot name="title">
            {{ $teacher->name }}
        </x-slot>
        <x-slot name="description">
            {{ $teacher->position }}
        </x-slot>
    </x-frontend.header>


    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <img src="{{ asset($teacher->image) }}" class="card-img-teacher" alt="{{ $teacher->name }}">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-9">
                <table class="table table-striped">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $teacher->name }}</td>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td>{{ $teacher->nip }}</td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>:</td>
                        <td>{{ $teacher->birthplace }}, {{ $teacher->birthdate }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-layouts.frontend>
