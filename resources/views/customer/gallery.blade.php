@extends('layouts.customer')

@section('title', 'Gallery')

@section('content')

<!-- Gallery Section -->
<section class="bg-linear-to-b from-white/75 via-white/90 to-sage min-h-screen pt-22">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16 py-16 w-full">
        <h2 class="font-display font-bold text-4xl md:text-4xl lg:text-5xl xl:text-5xl text-center text-moss mb-6">Our Gallery</h2>
        <p class="text-md md:text-md lg:text-lg xl:text-lg text-center text-text-dark/80 mb-14">
            Koleksi selempang terbaik kami yang telah melalui proses bordir berkualitas tinggi.
        </p>

        <!-- Grid Layout (3 columns) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($galleries as $gallery)
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('storage/' . $gallery->image) }}" 
                        alt="{{ $gallery->title }}" 
                        class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-300">

                    <div class="absolute inset-0 bg-linear-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                        <div>
                            <h4 class="text-lg font-bold text-white">{{ $gallery->title }}</h4>
                            <p class="text-sm text-white">{{ $gallery->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection