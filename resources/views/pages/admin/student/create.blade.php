<x-layouts.admin title="Tambah Siswa">


    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
                <li class="breadcrumb-item active">Create</li>

            </ol>
        </nav>
        <a href="{{ route('admin.students.index') }}" class="btn btn-danger btn-sm ml-auto mb-3">Kembali</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Tambah Siswa">
                <form action="{{ route('admin.students.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-input.text label="Nama" name="name" />
                    <x-input.text label="Kelas" name="class" />
                    <x-input.select label="Status " name="status">
                        <option value="active">
                            Masih Aktif
                        </option>
                        <option value="inactive">
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
