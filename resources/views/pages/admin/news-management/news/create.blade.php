<x-layouts.admin title="Tambah Berita">


    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Manajemen Berita</a></li>
                <li class="breadcrumb-item ">Berita</li>
                <li class="breadcrumb-item active">Create</li>

            </ol>
        </nav>
        <a href="{{ route('admin.news.index') }}" class="btn btn-danger btn-sm ml-auto mb-3">Kembali</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Tambah Data Berita">
                <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-input.select label="Kategori" name="news_category_id" id="news_category_id">
                        <option value="">Pilih Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </x-input.select>
                    <x-input.text label="Judul" name="title" id="title" />
                    <x-input.text label="Slug" name="slug" id="slug" />
                    <x-input.mde label="Konten" name="content" id="content" />
                    <x-input.file label="Thumbnail" name="thumbnail" id="thumbnail" />
                    <x-button.primary class="float-end" type="submit">
                        Simpan
                    </x-button.primary>
                </form>
            </x-admin.card>
        </div>
    </div>



    @push('custom-scripts')
        <script>
            $(document).ready(function() {
                $('#title').keyup(function() {
                    $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g, "-"));
                });
            });
        </script>
    @endpush
</x-layouts.admin>
