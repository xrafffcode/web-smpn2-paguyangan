<div class="row ">
    @foreach ($news as $item)
        <div class="col-12 col-md-6 col-lg-3 mt-4">
            <div class="card card-news">
                <img src="{{ asset($item->thumbnail) }}" class="card-img-top " alt="{{ $item->name }}">
                <div class="card-body p-3 ">
                    <h5 class="card-title">{{ \Illuminate\Support\Str::limit($item->title, 50) }}</h5>
                    <p class="card-text">
                        {!! \Illuminate\Support\Str::markdown(Str::limit($item->content, 100)) !!}
                    </p>
                    <a href="{{ route('news.show', $item->slug) }}" class="btn btn-primary btn-sm position-absolute"
                        style="bottom: 10px;">
                        Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
