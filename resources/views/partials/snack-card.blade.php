<div class="col">
    <div class="card krz-card h-100">
        <img src="{{ asset('assets/images/' . $snack->image) }}" class="card-img-top" alt="{{ $snack->name }}">
        <div class="card-body d-flex flex-column">
            <h3 class="krz-card-title">{{ $snack->name }}</h3>
            <p class="krz-muted mb-2">{{ $snack->flavor }} &middot; {{ $snack->weight }} g</p>
            <div class="d-flex justify-content-between align-items-center mt-auto pt-2">
                <span class="krz-price">{{ $snack->rupiah }}</span>
                <a href="{{ route('produk.show', $snack) }}" class="btn btn-krz btn-sm">Lihat Detail</a>
            </div>
        </div>
    </div>
</div>
