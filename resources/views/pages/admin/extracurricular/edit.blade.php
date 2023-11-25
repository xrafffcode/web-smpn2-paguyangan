<x-layouts.admin title="Edit Prestasi">

    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Manajemen Website</a></li>
                <li class="breadcrumb-item">Prestasi</li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>

            </ol>
        </nav>
        <a href="{{ route('admin.achievements.index') }}" class="btn btn-danger btn-sm ml-auto mb-3">Kembali</a>

    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Edit Prestasi">
                <form action="{{ route('admin.achievements.update', $achievement->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <x-input.text label="Nama Peserta" name="name" :value="$achievement->name" />
                    <x-input.text label="Prestasi" name="achievement" :value="$achievement->achievement" />
                    <x-input.text label="Tingkat" name="level" :value="$achievement->level" />
                    <x-input.text label="Tahun" name="year" :value="$achievement->year" />

                    <x-button.primary class="float-end" type="submit">
                        Update
                    </x-button.primary>
                </form>
            </x-admin.card>
        </div>
    </div>



    @push('custom-scripts')
        <script>
            // preview image
            function previewImage(input, element) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $(element).attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            // preview desktop image
            $("#desktop_image").change(function() {
                previewImage(this, '#desktop_image_preview');
            });

            // preview mobile image
            $("#mobile_image").change(function() {
                previewImage(this, '#mobile_image_preview');
            });
        </script>
    @endpush
</x-layouts.admin>
