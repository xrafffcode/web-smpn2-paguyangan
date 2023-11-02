<x-layouts.admin title="Prestasi">
    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Manajemen Website</a></li>
                <li class="breadcrumb-item active" aria-current="page">Prestasi</li>
            </ol>
        </nav>
        <a href="{{ route('admin.achievements.create') }}" class="btn btn-primary btn-sm ml-auto mb-3">Tambah Prestasi</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Data Prestasi">
                <x-admin.datatable>
                    <x-slot name="thead">
                        <tr>
                            <th>No</th>
                            <th>Nama Peserta</th>
                            <th>Prestasi</th>
                            <th>Tingkat</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($achievements as $achievement)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $achievement->name }}</td>
                                <td>{{ $achievement->achievement }}</td>
                                <td>{{ $achievement->level }}</td>
                                <td>{{ $achievement->year }}</td>
                                <td>
                                    <a href="{{ route('admin.achievements.edit', $achievement->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('admin.achievements.destroy', $achievement->id) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger"
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
