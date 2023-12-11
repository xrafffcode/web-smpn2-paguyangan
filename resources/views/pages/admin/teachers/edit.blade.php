<x-layouts.admin title="Edit Guru">


    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Data Guru Dan Karyawan</a></li>
                <li class="breadcrumb-item active">Edit</li>

            </ol>
        </nav>
        <a href="{{ route('admin.teachers.index') }}" class="btn btn-danger btn-sm ml-auto mb-3">Kembali</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Edit Guru">
                <form action="{{ route('admin.teachers.update', $teacher->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <x-input.text label="Nama " name="name" :value="$teacher->name" />
                    <x-input.select label="Jenis Kelamin" name="gender">
                        <option value="L" {{ $teacher->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                        </option>
                        <option value="P" {{ $teacher->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan
                        </option>
                    </x-input.select>
                    <x-input.text label="Jabatan " name="position" :value="$teacher->position" />
                    <x-input.text label="NIP " name="nip" :value="$teacher->nip" />
                    <x-input.text label="Tempat Lahir " name="birthplace" :value="$teacher->birthplace" />
                    <x-input.date label="Tanggal Lahir " name="birthdate" :value="$teacher->birthdate" />
                    <x-input.text label="Nomor Handhphone " name="phone" :value="$teacher->phone" />
                    <x-input.textarea label="Alamat " name="address" :value="$teacher->address" />
                    <x-input.file label="Foto " name="image" />
                    <x-input.select label="Status " name="status">
                        <option value="1" {{ $teacher->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="0" {{ $teacher->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif
                    </x-input.select>
                    <x-button.primary class="float-end" type="submit">
                        Simpan
                    </x-button.primary>
                </form>
            </x-admin.card>
        </div>
    </div>


</x-layouts.admin>
