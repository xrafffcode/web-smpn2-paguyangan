<x-layouts.admin title="Edit Kategori Berita">


    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Manajemen Berita</a></li>
                <li class="breadcrumb-item ">Kategori</li>
                <li class="breadcrumb-item active">Edit</li>

            </ol>
        </nav>
        <a href="{{ route('admin.news-categories.index') }}" class="btn btn-danger btn-sm ml-auto mb-3">Kembali</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Edit Data Kategori Berita">
                <form action="{{ route('admin.news-categories.update', $category->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <x-input.text label="Title " name="title" id="title" value="{{ $category->title }}" />
                    <x-input.text label="Slug " name="slug" id="slug" value="{{ $category->slug }}" />
                    <x-input.textarea label="Description " name="description" value="{{ $category->description }}" />
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
