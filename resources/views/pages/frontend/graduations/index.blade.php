<x-layouts.frontend title="Pengumuman Kelulusan">

    <x-frontend.header>
        <x-slot name="title">
            Pengumuman Kelulusan
        </x-slot>
        <x-slot name="description">
            Pengumuman kelulusan {{ getWebConfiguration()->name }}
        </x-slot>
    </x-frontend.header>


    <div class="container d-flex flex-column mt-5 mb-5 justify-content-center  align-items-center">
        <p class="fw-bold mb-2">
            *Cari dengan nomor ujian
        </p>
        <div class="d-flex">
            <input type="text" name="test_number" class="form-control" placeholder="Cari Dengan Nomer Ujian"
                id="search">
            <button class="btn btn-primary ms-2" id="btn">Cari</button>
        </div>
        <div class="mt-4 text-center">
            <h1 id="name"></h1>
            <h2 id="result"></h2>
        </div>
    </div>

    @push('plugin-scripts')
        <script src="https://cdn.jsdelivr.net/npm/tsparticles-confetti@2.10.1/tsparticles.confetti.bundle.min.js"></script>
    @endpush

    @push('custom-scripts')
        <script>
            const sound = new Audio('{{ asset('frontend/assets/win.mp3') }}');
            $(document).ready(function() {
                $('#btn').click(function() {
                    var test_number = $('#search').val();
                    $('#result').html('Loading...');
                    $('#result').removeClass('text-success');
                    $('#result').removeClass('text-danger');
                    $('#name').html('');
                    $.ajax({
                        url: "api/graduation",
                        method: "GET",
                        data: {
                            test_number: test_number
                        },
                        success: function(data) {

                            if (data.message === 'Data ditemukan') {
                                if (data.data.status === 'passed') {
                                    $('#result').html('Selamat anda lulus');
                                    $('#result').addClass('text-success');
                                    $('#name').html(data.data.name);
                                    confetti({
                                        particleCount: 300,
                                        spread: 200,
                                        origin: {
                                            y: 0.6
                                        },
                                    });
                                    sound.play();

                                } else {
                                    $('#result').html('Maaf anda tidak lulus');
                                    $('#result').addClass('text-danger');
                                    $('#name').html(data.data.name);
                                }
                            } else {
                                $('#result').html('Data tidak ditemukan');
                            }
                        },
                        error: function(xhr, status, error) {

                            console.error("AJAX Request Failed. Status: " + status + ", Error: " +
                                error);
                            $('#result').html('Error occurred. Please try again.');
                        }
                    });
                });
            });
        </script>
    @endpush
</x-layouts.frontend>
