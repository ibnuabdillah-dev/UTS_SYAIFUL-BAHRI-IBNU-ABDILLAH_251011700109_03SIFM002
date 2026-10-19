@extends('layouts.app')

@section('title', 'Katalog Produk')

@section('content')
<div class="container">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-3">
        <div>
            <p class="krz-eyebrow mb-0">KATALOG PRODUK</p>
            <h1 class="krz-heading display-6 mb-0">Pilihan Camilan Terbaik<br>untuk Kamu</h1>
        </div>
        <form action="{{ route('produk.index') }}" method="GET" class="krz-search">
            <input type="search" name="q" value="{{ $q }}" class="form-control" placeholder="Cari produk..." aria-label="Cari produk">
        </form>
    </div>

    <div class="d-flex flex-wrap gap-2 mb-4">
        @foreach (['Semua' => '', 'Keripik' => 'Keripik', 'Kacang' => 'Kacang', 'Makaroni' => 'Makaroni'] as $label => $value)
            <a href="{{ $value === '' ? route('produk.index') : route('produk.index', ['q' => $value]) }}"
               class="krz-chip {{ $q === $value ? 'active' : '' }}">{{ $label }}</a>
        @endforeach
    </div>

    @if ($snacks->count())
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
            @foreach ($snacks as $snack)
                @include('partials.snack-card')
            @endforeach
        </div>

        <div class="mt-5 text-center">
            {{ $snacks->links('vendor.pagination.krezzo') }}
            <p class="krz-muted small mt-2">Menampilkan {{ $snacks->firstItem() }}&ndash;{{ $snacks->lastItem() }} dari {{ $snacks->total() }} produk</p>
        </div>
    @else
        <p class="text-center py-5 krz-muted">Produk tidak ditemukan. Coba kata kunci lain.</p>
    @endif
</div>
@endsection
