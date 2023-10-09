<x-layouts.admin title="Konfigurasi Web">
    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Manajemen Website</a></li>
                <li class="breadcrumb-item active" aria-current="page">Konfigruasi</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Data Konfigurasi">
                <form action="{{ route('admin.web-configuration.update', $webConfiguration->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <x-input.text value="{{ $webConfiguration->name }}" label="Nama Website" name="name" />
                            <x-input.textarea value="{{ $webConfiguration->description }}" label="Deskripsi Website"
                                name="description" />
                            <x-input.text value="{{ $webConfiguration->email }}" label="Email Website" name="email" />
                            <x-input.text value="{{ $webConfiguration->phone }}" label="Nomor Telepon Website"
                                name="phone" />
                            <x-input.textarea value="{{ $webConfiguration->address }}" label="Alamat Website"
                                name="address" />
                            <x-input.text value="{{ $webConfiguration->map }}" label="Map Website" name="map" />

                        </div>
                        <div class="col">
                            <img src="{{ asset($webConfiguration->logo) }}" alt="logo" width="98"
                                class="mb-2">
                            <x-input.file name="logo" label="Logo Website" />
                            <x-input.text value="{{ $webConfiguration->facebook }}" label="Facebook Website"
                                name="facebook" />
                            <x-input.text value="{{ $webConfiguration->instagram }}" label="Instagram Website"
                                name="instagram" />
                            <x-input.text value="{{ $webConfiguration->youtube }}" label="Youtube Website"
                                name="youtube" />
                            <x-input.text value="{{ $webConfiguration->theme_color }}" label="Warna Website"
                                name="theme_color" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </x-admin.card>
        </div>
    </div>
</x-layouts.admin>
