@extends('layouts.appuser')

@section('title', 'Informasi Publik')

@section('content')
<div class="bg-white shadow-md p-6 rounded-md">
    <h2 class="text-2xl font-bold text-green-600 mb-4">Informasi Publik</h2>

    @forelse ($informasi as $info)
    <div class="border-b py-4">
        <h3 class="text-xl font-semibold text-blue-700">{{ $info->judul }}</h3>
        <p class="text-gray-700 mt-2">{{ $info->konten }}</p>
        <span class="text-sm text-gray-500">Diposting pada {{ $info->created_at->format('d M Y') }}</span>
    </div>
@empty
    <p class="text-gray-500">Belum ada informasi publik yang tersedia.</p>
@endforelse

</div>
@endsection
