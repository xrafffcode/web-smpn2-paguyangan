<x-layouts.admin title="Buku Tamu">
    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Buku Tamu</li>
            </ol>
        </nav>
        @hasrole('admin')
            <a href="{{ route('admin.guestbooks.create') }}" class="btn btn-primary btn-sm ml-auto mb-3">Tambah Tamu</a>
        @else
            <a href="{{ route('petugas.guestbooks.create') }}" class="btn btn-primary btn-sm ml-auto mb-3">Tambah Tamu
            </a>
        @endhasrole
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Data Buku Tamu">
                <x-admin.datatable>
                    <x-slot name="thead">
                        <tr>
                            <th>No</th>
                            <th>Nama Tamu</th>
                            <th>Alamat</th>
                            <th>Nomer Hp</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($guestbooks as $guestbook)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $guestbook->name }}</td>
                                <td>{{ $guestbook->address }}</td>
                                <td>{{ $guestbook->phone }}</td>
                                <td>{{ $guestbook->date->format('d F Y') }}</td>
                                <td>

                                    <form action="{{ route('admin.guestbooks.destroy', $guestbook->id) }}"
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
