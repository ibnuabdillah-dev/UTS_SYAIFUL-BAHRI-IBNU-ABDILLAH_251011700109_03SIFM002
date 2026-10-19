<footer class="krz-footer mt-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-4">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Krezzo" height="48" class="krz-footer-logo mb-2">
                <p class="font-script krz-yellow fs-5 mb-2">Semua Berhak Nyemil Enak</p>
                <p class="small mb-3">Lahir dari kecintaan terhadap rasa, kualitas, dan kebahagiaan sederhana.</p>
            </div>
            <div class="col-6 col-lg-2">
                <h3 class="krz-footer-title">Menu</h3>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('produk.index') }}">Catalog</a>
                <a href="{{ route('contact') }}">Contact Us</a>
            </div>
            <div class="col-6 col-lg-2">
                <h3 class="krz-footer-title">Kategori</h3>
                <a href="{{ route('produk.index', ['q' => 'Keripik']) }}">Keripik</a>
                <a href="{{ route('produk.index', ['q' => 'Kacang']) }}">Kacang</a>
                <a href="{{ route('produk.index', ['q' => 'Makaroni']) }}">Makaroni</a>
                <a href="{{ route('produk.index') }}">Semua Produk</a>
            </div>
            <div class="col-lg-4">
                <h3 class="krz-footer-title">Hubungi Kami</h3>
                <p class="mb-2">+62 895 3879 85544</p>
                <p class="mb-2">krezzo.id@gmail.com</p>
                <p class="mb-0">Jl. Cendrawasih V, Sawah Baru, Ciputat, Tangerang Selatan, Banten</p>
            </div>
        </div>
    </div>
    <div class="krz-footer-bottom">
        <div class="container d-flex flex-column flex-md-row justify-content-between gap-1 small py-3">
            <span>&copy; {{ date('Y') }} Krezzo. Semua hak dilindungi.</span>
            <span class="fst-italic">Camilan enak untuk setiap saat</span>
        </div>
    </div>
</footer>
