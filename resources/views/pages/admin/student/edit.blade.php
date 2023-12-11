<x-layouts.admin title="Edit Siswa">


    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Edit Siswa</a></li>
                <li class="breadcrumb-item active">Edit</li>

            </ol>
        </nav>
        <a href="{{ route('admin.students.index') }}" class="btn btn-danger btn-sm ml-auto mb-3">Kembali</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Edit Siswa">
                <form action="{{ route('admin.students.update', $student->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <x-input.text label="Nama" name="name" :value="$student->name" />
                    <x-input.text label="Kelas" name="class" :value="$student->class" />
                    <x-input.select label="Status " name="status">
                        <option value="active" {{ $student->status == 'active' ? 'selected' : '' }}>
                            Masih Aktif
                        </option>
                        <option value="inactive" {{ $student->status == 'inactive' ? 'selected' : '' }}>
                            Sudah Lulus
                        </option>
                    </x-input.select>
                    <x-button.primary class="float-end" type="submit">
                        Simpan
                    </x-button.primary>
                </form>
            </x-admin.card>
        </div>
    </div>


</x-layouts.admin>
