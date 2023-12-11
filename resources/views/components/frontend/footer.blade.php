<div class="bg-primary">
    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5  border-top">
            <div class="col mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <img src="{{ asset(getWebConfiguration()->logo) }}" alt="" width="60" height="60"
                        class="rounded-circle me-2">
                </a>
                <p class="text-white">
                    {{ getWebConfiguration()->name }}
                </p>
                <p class="text-white">© 2022</p>
                <ul class="list-unstyled d-flex text-white mt-3">
                    <li class="me-3"><a href="{{ getWebConfiguration()->facebook }}" class="text-white"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li class="me-3"><a href="{{ getWebConfiguration()->instagram }}" class="text-white"><i
                                class="fab fa-instagram"></i></a></li>
                    <li class="me-3"><a href="{{ getWebConfiguration()->youtube }}" class="text-white"><i
                                class="fab fa-youtube"></i></a></li>
                </ul>
            </div>

            <div class="col mb-3">

            </div>

            <div class="col mb-3">
                <h5 class="text-white">Tautan</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ route('home') }}" class="nav-link p-0 text-white">Beranda</a>
                    </li>
                    <li class="nav-item mb-2"><a href="{{ route('achievement') }}"
                            class="nav-link p-0 text-white">Prestasi</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('extracurricular') }}"
                            class="nav-link p-0 text-white">Ekstrakurikuler</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('gallery') }}"
                            class="nav-link p-0 text-white">Gallery</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5 class="text-white">Berita Terbaru</h5>
                <ul class="nav flex-column">
                    @foreach (\App\Models\News::orderBy('created_at', 'desc')->take(3)->get() as $news)
                        <li class="nav-item mb-2"><a href="{{ route('news.show', $news->slug) }}"
                                class="nav-link p-0 text-white">{{ $news->title }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col mb-3">
                <h5 class="text-white">Alamat Kami</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">
                            {{ getWebConfiguration()->address }}</a></li>
                </ul>
            </div>
        </footer>

    </div>
</div>
