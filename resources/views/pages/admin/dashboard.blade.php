<x-layouts.admin title="Dashboard">
    @push('plugin-styles')
        <link href="{{ asset('admin/assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
    @endpush


    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 id="welcomeMessage" class="mb-3 mb-md-0">Selamat Datang, {{ Auth::user()->name }}</h4>
        </div>

    </div>

    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
                <div class="col-md-3 grid-margin ">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline mb-2">
                                <h6 class="card-title mb-0">Jumlah Pendatang</h6>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">
                                        {{ \Sarfraznawaz2005\VisitLog\Models\VisitLog::count() }}
                                    </h3>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin ">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline mb-2">
                                <h6 class="card-title mb-0">Total Prestasi</h6>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">
                                        {{ \App\Models\Achievement::count() }}
                                    </h3>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin ">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline mb-2">
                                <h6 class="card-title mb-0">Total Berita</h6>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">
                                        {{ \App\Models\News::count() }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin ">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline mb-2">
                                <h6 class="card-title mb-0">Total Gallery</h6>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">
                                        {{ \App\Models\Gallery::count() }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->


    @push('plugin-scripts')
        <script src="{{ asset('admin/assets/plugins/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
    @endpush

    @push('custom-scripts')
        <script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var currentTime = new Date();
                var currentHour = currentTime.getHours();

                var welcomeMessage = document.getElementById('welcomeMessage');

                if (currentHour < 12) {
                    welcomeMessage.innerHTML = 'Selamat Pagi, {{ Auth::user()->name }}';
                } else if (currentHour < 18) {
                    welcomeMessage.innerHTML = 'Selamat Siang, {{ Auth::user()->name }}';
                } else {
                    welcomeMessage.innerHTML = 'Selamat Malam, {{ Auth::user()->name }}';
                }
            });
        </script>
    @endpush


</x-layouts.admin>
