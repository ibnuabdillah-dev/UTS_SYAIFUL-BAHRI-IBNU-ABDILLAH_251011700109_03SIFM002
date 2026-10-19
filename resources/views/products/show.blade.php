@extends('layouts.app')

@section('title', $snack->name)

@section('content')
<div class="container">
    <div class="row g-5">
        <div class="col-lg-6">
            <div class="card krz-card p-3">
                <img src="{{ asset('assets/images/' . $snack->image) }}" alt="{{ $snack->name }}" class="img-fluid rounded-4">
            </div>
        </div>
        <div class="col-lg-6">
            <h1 class="krz-heading display-5 mb-1">{{ $snack->name }}</h1>
            <p class="krz-price fs-2 mb-3">{{ $snack->rupiah }}</p>

            <div class="row g-3 mb-4">
                <div class="col-6"><div class="card krz-card px-3 py-2"><span class="krz-muted small">Rasa</span><strong class="krz-green">{{ $snack->flavor }}</strong></div></div>
                <div class="col-6"><div class="card krz-card px-3 py-2"><span class="krz-muted small">Berat</span><strong class="krz-green">{{ $snack->weight }} g</strong></div></div>
            </div>

            <h2 class="fs-4 krz-green fw-bold">Deskripsi Produk</h2>
            <p class="lh-lg">{{ $snack->description }}</p>

            <h2 class="fs-4 krz-green fw-bold mt-4">Kenapa kamu bakal suka</h2>
            <ul class="krz-check lh-lg">
                <li>Renyah dan tahan lama, tetap enak sampai gigitan terakhir</li>
                <li>Cocok jadi teman nonton, kerja, atau kumpul bareng</li>
                <li>Kemasan praktis, mudah dibawa ke mana saja</li>
            </ul>

            <div class="d-flex flex-wrap gap-2 mt-4">
                <a href="{{ route('produk.index') }}" class="btn btn-yellow">Kembali ke Katalog</a>
                @if ($other)
                    <a href="{{ route('produk.show', $other) }}" class="btn btn-outline-krz">Produk Lainnya</a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
