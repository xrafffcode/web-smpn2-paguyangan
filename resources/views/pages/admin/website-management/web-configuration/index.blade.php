<x-layouts.admin title="Konfigurasi Web">
    @push('plugin-styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    @endpush

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
                            <x-input.text value="{{ $webConfiguration->name }}" label="Nama Sekolah" name="name" />

                            <x-input.text value="{{ $webConfiguration->headmaster_name }}" label="Nama Kepala Sekolah"
                                name="headmaster_name" />
                            <img src="{{ asset($webConfiguration->headmaster_image) }}" alt="logo" width="98"
                                class="mb-2">
                            <x-input.file name="headmaster_image" label="Foto Kepala Sekolah" />
                            <x-input.textarea value="{{ $webConfiguration->headmaster_message }}"
                                label="Pesan Kepala Sekolah" name="headmaster_message" id="headmaster_message" />
                            <x-input.textarea value="{{ $webConfiguration->description }}" label="Deskripsi Website"
                                name="description" />
                            <x-input.textarea value="{{ $webConfiguration->vision }}" label="Visi" name="vision"
                                id="vision" />
                            <x-input.textarea value="{{ $webConfiguration->mission }}" label="Misi" name="mission"
                                id="mission" />
                        </div>
                        <div class="col">
                            <img src="{{ asset($webConfiguration->organization_structure) }}" alt="logo"
                                width="98" class="mb-2">
                            <x-input.file name="organization_structure" label="Struktur Organisasi" />
                            <x-input.text value="{{ $webConfiguration->email }}" label="Email Website" name="email" />
                            <x-input.text value="{{ $webConfiguration->phone }}" label="Nomor Telepon Website"
                                name="phone" />
                            <x-input.textarea value="{{ $webConfiguration->address }}" label="Alamat Website"
                                name="address" />
                            <x-input.text value="{{ $webConfiguration->map }}" label="Map Website" name="map" />
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

    @push('plugin-scripts')
        <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    @endpush

    @push('custom-scripts')
        <script>
            var simplemde = new SimpleMDE({
                element: document.getElementById("headmaster_message"),
            });

            var simplemde = new SimpleMDE({
                element: document.getElementById("vision"),
            });

            var simplemde = new SimpleMDE({
                element: document.getElementById("mission"),
            });
        </script>
    @endpush

</x-layouts.admin>
