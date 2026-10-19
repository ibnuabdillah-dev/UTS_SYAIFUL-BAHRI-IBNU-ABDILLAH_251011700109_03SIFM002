@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container py-4">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <p class="krz-eyebrow mb-1">TENTANG KAMI</p>
            <h1 class="krz-heading display-5 mb-3">Lebih dari Sekadar Camilan</h1>
            <p class="lh-lg">Krezzo adalah brand camilan kering yang lahir dari kecintaan kami terhadap rasa, kualitas, dan kebahagiaan sederhana. Kami percaya, camilan bukan hanya soal rasa, tapi juga tentang momen&mdash;baik saat sendiri, bersama teman, maupun keluarga.</p>
            <div class="row g-3 text-center mt-3">
                @foreach (['Bahan Pilihan Berkualitas', 'Rasa Lezat dan Renyah', 'Cocok untuk Segala Suasana'] as $item)
                    <div class="col-4">
                        <div class="krz-icon mx-auto mb-2">&#9733;</div>
                        <p class="small mb-0">{{ $item }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-6">
            <div class="krz-polaroid">
                <img src="{{ asset('assets/images/footer.png') }}" alt="Camilan Krezzo" class="img-fluid">
            </div>
            <p class="font-script krz-green fs-4 text-center mt-3">Camilan enak untuk semua cerita!</p>
        </div>
    </div>
</div>
@endsection
