@extends('layouts.appuser')

@section('title', 'Panduan Video')

@section('content')

<div class="pb-28">

    <!-- Video Player -->
    <div class="relative bg-black video-player-container rounded-xl overflow-hidden shadow-lg">
    <video id="mainVideo" controls autoplay class="w-full aspect-video object-cover rounded-xl">
        <source src="{{ asset('storage/' . $mainVideo->video_url) }}" type="video/mp4">
        Browser tidak mendukung video.
    </video>
    </div>


    <!-- Detail Video -->
    <div class="px-4 mt-3">
        <h2 class="font-semibold text-lg text-gray-900">
            {{ $mainVideo->judul }}
        </h2>

        <p class="text-xs text-gray-500 mt-1 flex gap-3">
            <span>{{ $mainVideo->durasi }}</span> |
            <span><span id="viewsCount">{{ $mainVideo->views }}</span> views</span>
        </p>

        <div class="flex gap-6 items-center mt-4 text-gray-700">
            <button id="btnLike" class="text-center">
                ❤️ <span class="text-xs block">Suka</span>
            </button>

            <a target="_blank"
               href="https://wa.me/?text={{ urlencode(url()->current()) }}"
               class="text-center">
               🔗 <span class="text-xs block">Bagikan</span>
            </a>
        </div>
    </div>

    <!-- Judul Section -->
    <div class="px-4 mt-6">
        <h3 class="font-semibold text-base text-gray-900">Video Disarankan</h3>
    </div>

    <!-- List Rekomendasi -->
    <div class="mt-3 px-4 overflow-x-auto scrollbar-hide">
        <div class="flex gap-4">

            @foreach($recommended as $video)
                <a href="{{ route('user.panduan.show', $video->id) }}"
                   class="min-w-[170px] group">

                    <div class="relative rounded-lg overflow-hidden aspect-video bg-gray-300">
                        <img src="{{ asset('storage/' . $video->thumbnail) }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-150">
                        <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <span class="text-white text-xl">▶</span>
                        </div>
                    </div>

                    <p class="mt-2 text-sm font-semibold text-gray-900 leading-tight">
                        {{ $video->judul }}
                    </p>

                    <p class="text-xs text-gray-500 mt-1">
                        {{ $video->durasi }}
                    </p>
                </a>
            @endforeach

        </div>
    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", () => {

    let viewAdded = false;
    const video = document.getElementById('mainVideo');
    const viewText = document.getElementById('viewsCount');

    if (!video) return;

    video.addEventListener('play', () => {

        if (viewAdded) return;
        viewAdded = true;

        fetch(`/panduan/{{ $mainVideo->id }}/view`, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Accept": "application/json"
            }
        })
        .then(r => r.json())
        .then(data => {
            if(data.views !== undefined){
                viewText.innerText = data.views;
            }
        })
        .catch(err => console.error(err));
    });

});
</script>


@endsection

<style>
.video-player-container {
    width: 100%;
    max-width: 1100px;
    margin-inline: auto;
    border-radius: 14px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.35);
}
</style>
