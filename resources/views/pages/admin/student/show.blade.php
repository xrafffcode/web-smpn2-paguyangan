<x-layouts.admin title="{{ $teacher->name }}">
    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Data Guru</a></li>
                <li class="breadcrumb-item active">{{ $teacher->name }}</li>
            </ol>
        </nav>
        <a href="{{ route('admin.teachers.index') }}" class="btn btn-danger btn-sm ml-auto mb-3">Kembali</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="{{ $teacher->name }}">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset($teacher->image) }}" alt="image" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <th>Nama</th>
                                <td>{{ $teacher->name }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $teacher->gender }}</td>
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <td>{{ $teacher->position }}</td>
                            </tr>
                            <tr>
                                <th>NIP</th>
                                <td>{{ $teacher->nip }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>{{ $teacher->birthplace }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>{{ $teacher->birthdate }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon</th>
                                <td>{{ $teacher->phone }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $teacher->address }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <span class="badge bg-{{ $teacher->status == 'Aktif' ? 'success' : 'danger' }}">
                                        {{ $teacher->status }}
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </x-admin.card>
        </div>
    </div>
</x-layouts.admin>
