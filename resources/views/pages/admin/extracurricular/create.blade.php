<x-layouts.admin title="Tambah Ekstrakulikuler">


    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Ekstrakulikuler</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>

            </ol>
        </nav>
        <a href="{{ route('admin.extracurriculars.index') }}" class="btn btn-danger btn-sm ml-auto mb-3">Kembali</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Tambah Ekstrakulikuler">
                <form action="{{ route('admin.extracurriculars.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-input.text label="Nama Ekstrakulikuler" name="name" />
                    <x-input.textarea label="Deskripsi" name="description" />
                    <x-input.select label="Pembimbing" name="teacher_id">
                        <option value="">-- Pilih Pembimbing --</option>
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                        @endforeach
                    </x-input.select>
                    <x-input.file label="Gambar" name="image" />
                    <x-input.select label="Status" name="status">
                        <option value="">-- Pilih Status --</option>
                        <option value="active">Aktif</option>
                        <option value="inactive">Tidak Aktif</option>
                    </x-input.select>
                    <x-button.primary class="float-end" type="submit">
                        Simpan
                    </x-button.primary>
                </form>
            </x-admin.card>
        </div>
    </div>


</x-layouts.admin>
