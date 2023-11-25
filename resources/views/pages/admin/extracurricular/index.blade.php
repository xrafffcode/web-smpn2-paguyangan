<x-layouts.admin title="Data Ekstrakulikuler">
    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Ekstrakulikuler</a></li>
            </ol>
        </nav>
        <a href="{{ route('admin.extracurriculars.create') }}" class="btn btn-primary btn-sm ml-auto mb-3">Tambah
            Ekstrakulikuler</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Data Ekstrakulikuler">
                <x-admin.datatable>
                    <x-slot name="thead">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Pembimbing</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($extracurriculars as $extracurricular)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $extracurricular->name }}</td>
                                <td>{{ $extracurricular->description }}</td>
                                <td>
                                    <img src="{{ $extracurricular->image_url }}" alt="{{ $extracurricular->name }}"
                                        class="img-fluid" width="100">
                                </td>
                                <td>{{ $extracurricular->teacher->name }}</td>
                                <td>
                                    @if ($extracurricular->status == 1)
                                        <span class="badge bg-success">Aktif</span>
                                    @else
                                        <span class="badge bg-danger">Tidak Aktif</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.extracurriculars.edit', $extracurricular->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.extracurriculars.destroy', $extracurricular->id) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"
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
</x-layouts.admin>
