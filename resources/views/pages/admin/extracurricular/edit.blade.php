<x-layouts.admin title="Edit Ekstrakulikuler">


    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Ekstrakulikuler</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>

            </ol>
        </nav>
        <a href="{{ route('admin.extracurriculars.index') }}" class="btn btn-danger btn-sm ml-auto mb-3">Kembali</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Edit Ekstrakulikuler">
                <form action="{{ route('admin.extracurriculars.update', $extracurricular->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <x-input.text label="Nama Ekstrakulikuler" name="name" :value="$extracurricular->name" />
                    <x-input.textarea label="Deskripsi" name="description" :value="$extracurricular->description" />
                    <x-input.select label="Pembimbing" name="teacher_id">
                        <option value="">-- Pilih Pembimbing --</option>
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}" @if ($extracurricular->teacher_id == $teacher->id) selected @endif>
                                {{ $teacher->name }}</option>
                        @endforeach
                    </x-input.select>
                    <x-input.file label="Gambar" name="image" />
                    <x-input.select label="Status" name="status">
                        <option value="">-- Pilih Status --</option>
                        <option value="active" @if ($extracurricular->status == 'active') selected @endif>Aktif</option>
                        <option value="inactive" @if ($extracurricular->status == 'inactive') selected @endif>Tidak Aktif</option>
                    </x-input.select>
                    <x-button.primary class="float-end" type="submit">
                        Simpan
                    </x-button.primary>
                </form>
            </x-admin.card>
        </div>
    </div>


</x-layouts.admin>
