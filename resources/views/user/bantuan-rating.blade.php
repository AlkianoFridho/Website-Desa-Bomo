@extends('layouts.appuser')

@section('title','Rating Pelayanan')

@section('content')
<div class="p-4">

    {{-- Header --}}
    <div class="text-center mt-3">
        <h3 class="text-green-700 text-xl font-semibold">
            Layanan Bantuan
        </h3>
        <p class="text-gray-600 text-sm -mt-1">
            CS kami siap membantu
        </p>
    </div>

    {{-- CARD --}}
    <div class="bg-white mt-4 rounded-xl shadow border p-4">

        <form id="ratingForm">
            @csrf

            <input type="hidden" name="session_id" value="{{ $session_id }}">
            <input type="hidden" name="rating" id="ratingValue">

            <h4 class="text-center font-semibold text-gray-700 mb-3">
                Bagaimana Pelayanan Kami
            </h4>

            {{-- RATING STARS --}}
           <div class="flex justify-center gap-2 mb-4">
    @for($i=1;$i<=5;$i++)
        <button
            type="button"
            data-value="{{ $i }}"
            class="star"
        >
            <span class="star-icon text-3xl text-gray-300 select-none">
                ★
            </span>
        </button>
    @endfor
</div>








            {{-- Komentar --}}
            <div class="mt-2">
                <label class="text-sm font-semibold">Komentar :</label>
                <textarea
                    name="komentar"
                    rows="4"
                    class="w-full mt-1 border rounded-xl p-3 text-sm focus:ring-2 focus:ring-green-400 focus:outline-none"
                    placeholder="Tulis komentar"></textarea>
            </div>

            {{-- Submit --}}
            <div class="mt-4 text-center">
                <button
                    class="bg-green-700 text-white px-6 py-2 rounded-lg shadow font-semibold">
                    Submit Rating Pelayanan
                </button>
            </div>

            {{-- Skip --}}
            <div class="text-right mt-2">
                <a href="{{ route('user.bantuan') }}" class="text-gray-500 text-sm">
                    skip
                </a>
            </div>
        </form>
    </div>
</div>

{{-- STAR RATING SCRIPT --}}
<script>
document.addEventListener("DOMContentLoaded", function () {
    const stars = document.querySelectorAll('.star');
    const ratingValue = document.getElementById('ratingValue');

    function setStars(value){
        stars.forEach((star, index) => {
            const icon = star.querySelector('.star-icon');

            icon.classList.remove('active');

            if(index < value){
                icon.classList.add('active');
            }
        });
    }

    // default = semua abu-abu
    setStars(0);

    stars.forEach(star => {
        star.addEventListener('click', () => {
            const value = parseInt(star.dataset.value);
            ratingValue.value = value;
            setStars(value);
        });
    });
});
document.getElementById('ratingForm').addEventListener('submit', function (e) {
    e.preventDefault();

    if (!ratingValue.value) {
        alert('Silakan pilih rating terlebih dahulu');
        return;
    }

    fetch("{{ route('bantuan.rating.store') }}", {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value,
            'Accept': 'application/json'
        },
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(res => {
        alert(res.message);
        window.location.href = res.redirect;
    })
    .catch(() => alert('Gagal mengirim rating'));
});

</script>


<style>
.star-icon {
    color: #D1D5DB; /* Tailwind gray-300 */
}
.star-icon.active {
    color: #FACC15; /* Tailwind yellow-400 */
}
</style>


@endsection
