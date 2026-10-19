@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container py-4">
    <div class="row g-5 align-items-start">
        <div class="col-lg-6">
            <p class="krz-eyebrow mb-1">HUBUNGI KAMI</p>
            <h1 class="krz-heading display-5 mb-3">Kami Siap Membantu!</h1>
            <p>Punya pertanyaan, kritik, atau saran? Jangan ragu untuk menghubungi kami. Kami akan dengan senang hati membantu kamu.</p>
            <ul class="list-unstyled lh-lg mt-4">
                <li><strong>Telepon:</strong> +62 812 3456 7890</li>
                <li><strong>Email:</strong> krezzo.id@gmail.com</li>
                <li><strong>Alamat:</strong> Jl. Melati No. 12, Jakarta Selatan</li>
            </ul>
        </div>
        <div class="col-lg-6">
            <form class="card krz-card p-4" onsubmit="event.preventDefault(); alert('Terima kasih! Pesan kamu sudah kami terima.');">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" class="form-control" placeholder="Masukkan nama kamu" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Masukkan email kamu" required>
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea id="pesan" class="form-control" rows="4" placeholder="Tulis pesan kamu di sini..." required></textarea>
                </div>
                <button type="submit" class="btn btn-krz py-2">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>
@endsection
