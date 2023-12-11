<x-layouts.admin title="Data Guru">

    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Data Guru</a></li>
            </ol>
        </nav>
        <a href="{{ route('admin.teachers.create') }}" class="btn btn-primary btn-sm ml-auto mb-3">Tambah Guru</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Data Guru">
                <x-admin.datatable>
                    <x-slot name="thead">
                        <tr>
                            <th>No</th>
                            <th>Pas Foto</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset($teacher->image) }}" alt="image" class="img-table-lightbox">
                                </td>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->nip }}</td>
                                <td>
                                    <span
                                        class="badge bg-{{ $teacher->status == 'Aktif' ? 'success' : 'danger' }}">{{ $teacher->status }}</span>
                                </td>
                                <td>
                                    <a href="{{ route('admin.teachers.edit', $teacher->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{ route('admin.teachers.show', $teacher->id) }}"
                                        class="btn btn-info btn-sm">Detail</a>
                                    <form action="{{ route('admin.teachers.destroy', $teacher->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
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
