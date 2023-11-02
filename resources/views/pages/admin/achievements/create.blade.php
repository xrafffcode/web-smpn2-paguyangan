<x-layouts.admin title="Tambah Prestasi">


    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Manajemen Website</a></li>
                <li class="breadcrumb-item">Prestasi</li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>

            </ol>
        </nav>
        <a href="{{ route('admin.achievements.index') }}" class="btn btn-danger btn-sm ml-auto mb-3">Kembali</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Tambah Prestasi">
                <form action="{{ route('admin.achievements.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-input.text label="Nama Peserta" name="name" />
                    <x-input.text label="Prestasi" name="achievement" />
                    <x-input.text label="Tingkat" name="level" />
                    <x-input.text label="Tahun" name="year" />

                    <x-button.primary class="float-end" type="submit">
                        Simpan
                    </x-button.primary>
                </form>
            </x-admin.card>
        </div>
    </div>


</x-layouts.admin>
