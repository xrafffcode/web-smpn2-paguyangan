<x-layouts.admin title="Katagori Berita">
    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Manajemen Berita</a></li>
                <li class="breadcrumb-item active" aria-current="page">Berita</li>
            </ol>
        </nav>
        <a href="{{ route('admin.news.create') }}" class="btn btn-primary btn-sm ml-auto mb-3">Tambah
            Berita</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Data Berita">
                <x-admin.datatable>
                    <x-slot name="thead">
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Thumbnail</th>
                            <th>Status</th>
                            <th>Tanggal Publish</th>
                            <th>Aksi</th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($news as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>
                                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->title }}" class="img-fluid"
                                        width="100">
                                </td>
                                <td>
                                    @if ($item->is_published)
                                        <span class="badge bg-success text-white">Published</span>
                                    @else
                                        <span class="badge bg-danger text-white">Draft</span>
                                    @endif
                                </td>
                                <td>{{ $item->published_at }}</td>
                                <td>
                                    <a href="{{ route('admin.news.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST"
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
