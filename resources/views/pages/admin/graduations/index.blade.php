<x-layouts.admin title="Kelulusan">
    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Pengumuman Kelulusan</a></li>
            </ol>
        </nav>
        <a href="{{ route('admin.graduations.create') }}" class="btn btn-primary btn-sm ml-auto mb-3">Tambah Data</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Data Kelulusan">
                <x-admin.datatable>
                    <x-slot name="thead">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nomor Ujian</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($graduations as $graduation)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $graduation->name }}</td>
                                <td>{{ $graduation->test_number }}</td>
                                <td>
                                    @if ($graduation->status == 'passed')
                                        <span class="badge bg-success">Lulus</span>
                                    @else
                                        <span class="badge bg-danger">Tidak Lulus</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.graduations.edit', $graduation->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.graduations.destroy', $graduation->id) }}"
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
