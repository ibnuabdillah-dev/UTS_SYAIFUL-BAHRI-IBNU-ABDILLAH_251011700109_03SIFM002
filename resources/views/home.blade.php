@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <section class="krz-hero p-4 p-md-5">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <p class="eyebrow mb-1">CAMILAN ENAK UNTUK SETIAP SAAT</p>
                <h1 class="mb-0">Krezzo</h1>
                <p class="font-script krz-yellow fs-2 mb-3">Semua Berhak Nyemil Enak</p>
                <p class="mb-4 krz-hero-text">Camilan berkualitas yang siap menemani setiap momen spesialmu.</p>
                <a href="{{ route('produk.index') }}" class="btn btn-yellow">Lihat Katalog</a>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('assets/images/hero.png') }}" alt="Camilan Krezzo" class="img-fluid krz-hero-img">
            </div>
        </div>
    </section>

    <section class="row g-4 text-center py-5 px-lg-5">
        @foreach ([
            ['Bahan Pilihan Berkualitas', 'Kami menggunakan bahan baku yang berkualitas'],
            ['Rasa Lezat dan Renyah', 'Bumbunya pas, renyahnya awet.'],
            ['Cocok untuk Segala Suasana', 'Teman nongkrong, kerja, atau kumpul keluarga.'],
        ] as [$title, $text])
            <div class="col-md-4">
                <div class="krz-icon mx-auto mb-2">&#9733;</div>
                <p class="krz-card-title mb-0">{{ $title }}</p>
                <p class="krz-muted small mb-0">{{ $text }}</p>
            </div>
        @endforeach
    </section>

    <section class="pb-4">
        <p class="krz-eyebrow mb-0">PRODUK UNGGULAN KAMI</p>
        <h2 class="krz-heading mb-4">Pilihan Camilan Terbaik untuk Kamu</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
            @foreach ($featured as $snack)
                @include('partials.snack-card')
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('produk.index') }}" class="btn btn-outline-krz">Lihat Semua Produk</a>
        </div>
    </section>
</div>
@endsection
