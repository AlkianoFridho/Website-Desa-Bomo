@extends('layouts.appuser')

@section('title', 'Pengaduan')

@section('content')
<div class="bg-white shadow-md p-6 rounded-md">
    <h2 class="text-2xl font-bold text-green-600 mb-4">Formulir Pengaduan</h2>

    <form action="{{ route('pengaduan.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block font-semibold">Nama</label>
            <input type="text" name="nama" class="w-full p-2 border rounded-md">
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Email</label>
            <input type="email" name="email" class="w-full p-2 border rounded-md">
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Pesan</label>
            <textarea name="pesan" rows="4" class="w-full p-2 border rounded-md"></textarea>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-md">Kirim Pengaduan</button>
    </form>
</div>
@endsection
