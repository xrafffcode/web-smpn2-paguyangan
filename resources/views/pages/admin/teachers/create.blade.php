<x-layouts.admin title="Tambah Guru">


    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Data Guru Dan Karyawan</a></li>
                <li class="breadcrumb-item active">Create</li>

            </ol>
        </nav>
        <a href="{{ route('admin.teachers.index') }}" class="btn btn-danger btn-sm ml-auto mb-3">Kembali</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Tambah Guru">
                <form action="{{ route('admin.teachers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-input.text label="Nama " name="name" />
                    <x-input.select label="Jenis Kelamin" name="gender">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </x-input.select>
                    <x-input.text label="Jabatan " name="position" />
                    <x-input.text label="NIP " name="nip" />
                    <x-input.text label="Tempat Lahir " name="birthplace" />
                    <x-input.date label="Tanggal Lahir " name="birthdate" />
                    <x-input.text label="Nomor Handhphone " name="phone" />
                    <x-input.textarea label="Alamat " name="address" />
                    <x-input.file label="Foto " name="image" />
                    <x-input.select label="Status " name="status">
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </x-input.select>
                    <x-button.primary class="float-end" type="submit">
                        Simpan
                    </x-button.primary>
                </form>
            </x-admin.card>
        </div>
    </div>


</x-layouts.admin>
