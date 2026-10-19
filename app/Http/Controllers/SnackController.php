<?php

namespace App\Http\Controllers;

use App\Models\Snack;
use Illuminate\Http\Request;

class SnackController extends Controller
{
    public function index(Request $request)
    {
        $q = trim((string) $request->query('q', ''));

        $snacks = Snack::query()
            ->when($q !== '', fn ($query) => $query->where(
                fn ($w) => $w->where('name', 'like', "%{$q}%")->orWhere('flavor', 'like', "%{$q}%")
            ))
            ->orderBy('id')
            ->paginate(8)
            ->withQueryString();

        return view('products.index', compact('snacks', 'q'));
    }

    public function show(Snack $snack)
    {
        $other = Snack::where('id', '!=', $snack->id)->inRandomOrder()->first();

        return view('products.show', compact('snack', 'other'));
    }
}
