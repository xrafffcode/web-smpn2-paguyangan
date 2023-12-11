<x-layouts.admin title="Data Siswa">

    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
            </ol>
        </nav>
        <a href="{{ route('admin.students.create') }}" class="btn btn-primary btn-sm ml-auto mb-3">Tambah Siswa</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Data Siswa">
                <x-admin.datatable>
                    <x-slot name="thead">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->class }}</td>
                                <td>
                                    @if ($student->status == 'active')
                                        <span class="badge bg-success">
                                            Masih Aktif
                                        </span>
                                    @else
                                        <span class="badge bg-danger">
                                            Sudah Lulus
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.students.edit', $student->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>

                                    <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST"
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
