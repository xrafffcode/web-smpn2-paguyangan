<x-layouts.admin title="Tambah Prestasi">


    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Buku Tamu</li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
        @hasrole('admin')
            <a href="{{ route('admin.guestbooks.index') }}" class="btn btn-danger btn-sm ml-auto mb-3">Kembali</a>
        @else
            <a href="{{ route('petugas.guestbooks.index') }}" class="btn btn-danger btn-sm ml-auto mb-3">Kembali
            </a>
        @endhasrole
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Tambah Tamu">
                <form
                    action="@hasrole('admin'){{ route('admin.guestbooks.store') }}@else{{ route('petugas.guestbooks.store') }}@endhasrole"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-input.text label="Nama Tamu" name="name" />
                    <x-input.textarea label="Alamat" name="address" />
                    <x-input.text label="Nomer Hp" name="phone" />
                    <x-input.date label="Tanggal" name="date" />
                    <x-button.primary class="float-end" type="submit">
                        Simpan
                    </x-button.primary>
                </form>
            </x-admin.card>
        </div>
    </div>


</x-layouts.admin>
