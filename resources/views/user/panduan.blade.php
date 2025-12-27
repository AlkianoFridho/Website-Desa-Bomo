@extends('layouts.appuser')

@section('title', 'Panduan Video')

@section('content')

<div class="pb-28 max-w-4xl mx-auto">

    <!-- Video Player -->
    <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-black group">
        @if($mainVideo && $mainVideo->video_url)
            <video id="mainVideo"
                controls
                autoplay
                class="w-full aspect-video object-cover rounded-2xl">
                <source src="{{ asset('storage/' . $mainVideo->video_url) }}" type="video/mp4">
            </video>
        @else
            <div class="w-full aspect-video bg-gray-200 flex items-center justify-center text-gray-600 text-sm">
                📁 Video Tidak Tersedia
            </div>
        @endif
    </div>

    <!-- Detail Video -->
    <div class="px-4 mt-4">
        <h2 class="font-semibold text-xl text-gray-900">
            {{ $mainVideo->judul ?? 'Judul tidak tersedia' }}
        </h2>

        <p class="text-xs text-gray-500 mt-1 flex gap-3">
            <span>{{ $mainVideo->durasi ?? '--' }}</span> |
            <span>{{ $mainVideo->views ?? 0 }} views</span>
        </p>
    </div>


    <!-- ===================== -->
    <!--        KOMENTAR       -->
    <!-- ===================== -->
    <div class="px-4 mt-10">
        <h3 class="font-semibold text-lg text-gray-900 mb-3">Komentar</h3>


        @if($mainVideo) 
        <!-- FORM KOMENTAR -->
        <form action="{{ route('comments.store') }}" method="POST" class="bg-white rounded-xl border p-4 shadow-sm">
            @csrf
            <input type="hidden" name="panduan_id" value="{{ $mainVideo->id }}">
            <input name="guest_name" type="text" placeholder="Nama anda (opsional)"
                   class="w-full px-3 py-2 rounded-lg border border-gray-300 text-sm">
            <textarea name="comment" rows="3" required
                      placeholder="Tulis komentar..."
                      class="w-full mt-3 px-3 py-2 rounded-lg border border-gray-300 text-sm"></textarea>
            <button class="mt-3 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm transition">
                Kirim Komentar
            </button>
        </form>
        @else
            <p class="text-sm text-gray-500 mb-3">Video tidak tersedia, namun komentar masih bisa dilihat.</p>
        @endif


        <!-- LIST KOMENTAR -->
<div class="mt-6 space-y-4">
    @forelse($comments as $c)
        <div class="p-3 border rounded-lg bg-gray-50">
            <p class="text-sm font-semibold">
                {{ $c->name ?? 'Tamu' }}
            </p>
            <p class="text-sm text-gray-700 mt-1">{{ $c->comment }}</p>
            <span class="text-[10px] text-gray-400">
                {{ $c->created_at ? $c->created_at->diffForHumans() : '' }}
            </span>
        </div>
    @empty
        <p class="text-sm text-gray-500">Belum ada komentar.</p>
    @endforelse
</div>


    </div>


    <!-- Video Disarankan -->
    <div class="px-4 mt-8">
        <h3 class="font-semibold text-base text-gray-900">Video Disarankan</h3>
    </div>

    <div class="mt-3 px-4 overflow-x-auto scrollbar-hide">
        <div class="flex gap-4">
            @foreach($recommended ?? [] as $video)
                <a href="{{ route('user.panduan.show', $video->id) }}" class="min-w-[170px] group">
                    <div class="relative rounded-xl overflow-hidden aspect-video bg-gray-300 shadow-md">
                        <img src="{{ asset('storage/' . $video->thumbnail) }}" class="w-full h-full object-cover">
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

@endsection
