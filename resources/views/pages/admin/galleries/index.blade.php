<x-layouts.admin title="Gallery">
    @push('plugin-styles')
        <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/lightbox/css/lightbox.css') }}">
    @endpush

    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Manajemen Website</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ol>
        </nav>
        <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary btn-sm ml-auto mb-3">Tambah Gallery</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Data Gallery">
                <x-admin.datatable>
                    <x-slot name="thead">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($galleries as $gallery)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $gallery->title }}
                                </td>
                                <td>
                                    {{ $gallery->description }}
                                </td>
                                <td>
                                    <a href="{{ asset($gallery->image) }}" class="d-block" data-lightbox="gambar"
                                        data-title="{{ $gallery->description }}">
                                        <img src="{{ asset($gallery->image) }}" alt="image"
                                            class="img-table-lightbox">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.galleries.edit', $gallery->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.galleries.destroy', $gallery->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-admin.datatable>
            </x-admin.card>
        </div>
    </div>

    @push('plugin-scripts')
        <script src="{{ asset('frontend/assets/plugins/lightbox/js/lightbox-plus-jquery.min.js') }}"></script>

        <script>
            lightbox.option({
                'resizeDuration': 200,
                'wrapAround': true
            })
        </script>
    @endpush
</x-layouts.admin>
