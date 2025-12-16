@extends('layouts.customer')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="bg-linear-to-br from-white/75 to-sage  min-h-screen pt-24 flex items-center" id="hero">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16 py-16 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-7 gap-12 items-center">

            <!-- Text -->
            <div class="lg:col-span-4 bg-white/90 p-8 md:p-10 rounded-xl shadow-lg text-center lg:text-left space-y-8">
                <div class="space-y-6">

                    <h1 class="font-display font-bold text-4xl md:text-5xl lg:text-5xl xl:text-6xl leading-tight text-moss">
                        Selempang Premium untuk Momen Terbaik Anda
                    </h1>

                    <p class="text-md md:text-md lg:text-lg xl:text-lg text-text-dark/90  mx-auto lg:mx-0">
                        Custom untuk semua jenis acara — dikerjakan cepat dengan bahan pilihan terbaik.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('gallery') }}" class="px-8 py-3 bg-leaf text-white font-medium rounded-full hover:bg-rose transition-colors shadow-md">
                        Gallery
                    </a>
                    <a href="{{ route('order.step1') }}" class="px-8 py-3 border border-text-dark text-text-dark font-medium rounded-full hover:bg-rose hover:text-white hover:border-white transition-colors">
                        Order Now
                    </a>
                </div>
            </div>

            <!-- Video -->
            <div class="lg:col-span-3 rounded-2xl overflow-hidden shadow-xl animate-float">
                <video autoplay loop muted playsinline class="w-full h-full object-cover">
                    <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">
                </video>
            </div>

        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="bg-white/90 py-16 px-6 md:px-12 lg:px-16" id="about">
    <div class="max-w-7xl mx-auto">

        <!-- Section Header -->
        <div class="text-center mb-16 px-4">
            <h2 class="font-display font-bold text-4xl md:text-4xl lg:text-5xl xl:text-5xl text-center text-moss mb-12">About Us</h2>
        </div>

        <!-- Main Content -->
        <div class="bg-linear-to-r from-white/75 via-white/90 to-sage rounded-xl shadow-lg px-8 md:px-12 lg:px-12 py-12 mb-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Text Content -->
                <div>
                    <div class="space-y-4 text-text-dark leading-relaxed">
                        <p class="text-md md:text-md lg:text-lg xl:text-lg">
                            Wira Bordir Computer adalah penyedia layanan bordir selempang premium yang berkomitmen menghadirkan hasil rapi, elegan, dan berkesan untuk setiap acara. 
                            Kami melayani pemesanan selempang custom untuk wisuda, penghargaan, organisasi, perlombaan, hingga berbagai acara formal maupun non-formal lainnya.
                        </p>
                        <p class="text-md md:text-md lg:text-lg xl:text-lg">
                            Dengan dukungan tim berpengalaman dan proses produksi modern, setiap selempang dikerjakan secara teliti mulai dari pemilihan bahan hingga proses bordir untuk memastikan hasil akhir berkualitas tinggi dan tahan lama.
                        </p>
                    </div>
                </div>

                <!-- Company Image -->
                <div class="rounded-xl overflow-hidden shadow-lg w-auto h-auto object-cover">
                    <img src="{{ asset('images/mesin.jpeg') }}" alt="Wira Bordir">
                </div>

            </div>
        </div>

    </div>
</section>

<!-- Services Section -->
<section class="bg-linear-to-b from-white/90 to-sage py-20 px-6 md:px-12 lg:px-16" id="service">
    <div class="max-w-7xl mx-auto">
        <h2 class="font-display font-bold text-4xl md:text-4xl lg:text-5xl xl:text-5xl text-center text-moss mb-12">Why Choose Us</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Quality -->
            <div class="bg-white/90 p-8 rounded-xl shadow-md text-center hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-leaf/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <!-- Benang Jahit Icon -->
                    <svg fill="#344E41" width="38" height="38" viewBox="0 0 297 297" xmlns="http://www.w3.org/2000/svg">
                        <path d="m35.719,291.467c0,3.051 2.482,5.533 5.531,5.533h85.119c3.051,0 5.533-2.482 5.533-5.533v-5.64h-96.183v5.64z"/>
                        <path d="m113.441,48.091v-5.639c0-3.051-2.482-5.533-5.532-5.533h-48.2c-3.051,0-5.533,2.482-5.533,5.533v5.639 0.001l59.265-.001z"/>
                        <path d="m164.935,291.467c0,3.051 2.482,5.533 5.533,5.533h85.118c3.051,0 5.533-2.482 5.533-5.533v-5.64h-96.183v5.64z"/>
                        <path d="m242.658,5.532c0-3.051-2.482-5.532-5.532-5.532h-48.2c-3.05,0-5.532,2.482-5.532,5.532v5.64h59.263v-5.64z"/>
                        <path d="m278.614,264.503l-16.628-232.794c-0.205-2.881-2.629-5.138-5.517-5.138h-86.885c-2.888,0-5.312,2.257-5.517,5.137l-16.628,232.795c-0.111,1.548 0.411,3.028 1.469,4.164 1.057,1.136 2.496,1.762 4.048,1.762h120.141c1.552,0 2.991-0.626 4.048-1.762 1.059-1.136 1.58-2.615 1.469-4.164z"/>
                        <path d="m132.901,270.429l7.499-111.945-7.493-89.922c-0.237-2.844-2.658-5.072-5.513-5.072h-87.168c-2.854,0-5.275,2.229-5.513,5.073l-16.322,195.874c-0.13,1.561 0.382,3.054 1.442,4.206 1.06,1.152 2.506,1.786 4.072,1.786h108.996z"/>
                    </svg>
                </div>
                <h3 class="font-display text-2xl text-center font-semi-bold text-moss mb-2">Kualitas Jahitan Premium</h3>
                <p class="text-md text-text-dark/80">Bordir rapi, awet, dan detail. Menjaga tampilan selempang tetap elegan di setiap momen penting.</p>
            </div>

            <!-- Fast Production -->
            <div class="bg-white/90 p-8 rounded-xl shadow-md text-center hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-leaf/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <!-- Stopwatch Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#344E41" viewBox="0 0 24 24">
                        <path d="M12 8a1 1 0 0 1 1 1v4a1 1 0 1 1-2 0V9a1 1 0 0 1 1-1z"/>
                        <path d="M15.07 1H8.93a1 1 0 0 0 0 2h2.07v1.06A9 9 0 1 0 17.9 5.52a1 1 0 1 0-1.8.9A7 7 0 1 1 12 5a7.07 7.07 0 0 1 2.07.31A1 1 0 1 0 15.07 1z"/>
                    </svg>
                </div>
                <h3 class="font-display text-2xl text-center font-semi-bold text-moss mb-2">Proses Cepat & Tepat Waktu</h3>
                <p class="text-md text-text-dark/80">Pengerjaan tepat waktu tanpa mengurangi kualitas, cocok untuk kebutuhan mendadak dan acara resmi.</p>
            </div>

            <!-- Modern Machine -->
            <div class="bg-white/90 p-8 rounded-xl shadow-md text-center hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-leaf/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <!-- Mesin Bordir Icon -->
                    <svg width="36" height="36" viewBox="0 0 512 512" fill="#344E41" xmlns="http://www.w3.org/2000/svg" >
                        <path d="M478.609,392.437V139.13c0-46.03-37.448-83.478-83.478-83.478h-50.087V38.957c0-9.22-7.475-16.696-16.696-16.696 s-16.696,7.475-16.696,16.696v16.696h-33.391V38.957c0-9.22-7.475-16.696-16.696-16.696c-9.22,0-16.696,
                        7.475-16.696,16.696 v16.696h-128c-46.03,0-83.478,37.448-83.478,83.478v100.174c0,9.22,7.475,16.696,16.696,16.696h16.696v50.087 c0,9.22,7.475,16.696,16.696,16.696h16.696v16.696c0,9.22,7.475,16.696,16.696,16.696s16.696-7.475,
                        16.696-16.696v-16.696h16.696 c9.22,0,16.696-7.475,16.696-16.696V256h16.696c4.428,0,8.674-1.76,11.805-4.891c3.132-3.131,4.891-7.377,4.891-11.805v-50.087 h111.304v200.348H50.087C22.469,389.565,0,412.034,0,439.652v33.391c0,9.22,
                        7.475,16.696,16.696,16.696h478.609 c9.22,0,16.696-7.475,16.696-16.696v-33.391C512,417.887,498.041,399.329,478.609,392.437z M133.565,289.391h-33.391V256h33.391 V289.391z M395.13,189.217c9.22,0,16.696,7.475,16.696,16.696c0,9.22-7.475,
                        16.696-16.696,16.696s-16.696-7.475-16.696-16.696 C378.435,196.693,385.91,189.217,395.13,189.217z M395.13,256c9.22,0,16.696,7.475,16.696,16.696 c0,9.22-7.475,16.696-16.696,16.696s-16.696-7.475-16.696-16.696C378.435,263.475,385.91,
                        256,395.13,256z M478.609,456.348H33.391 v-16.696c0-9.206,7.49-16.696,16.696-16.696c16.559,0,395.834,0,411.826,0c9.206,0,16.696,7.49,16.696,16.696V456.348z"></path>
                    </svg>
                </div>
                <h3 class="font-display text-2xl text-center font-semi-bold text-moss mb-2">Teknologi Bordir Modern</h3>
                <p class="text-md text-text-dark/80">Dikerjakan dengan mesin bordir komputer presisi tinggi sehingga hasil setiap huruf dan pola tetap konsisten.</p>
            </div>

        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="bg-linear-to-b from-white/75 via-white/90 to-sage py-20 px-6 md:px-12 lg:px-16" id="contact">
    <div class="max-w-7xl mx-auto">

        <!-- Header -->
        <h2 class="font-display font-bold text-4xl md:text-4xl lg:text-5xl xl:text-5xl text-center text-moss mb-6">Where to Find Us</h2>
        <p class="text-md md:text-md lg:text-lg xl:text-lg text-center text-text-dark/80">
            Siap melayani dengan sepenuh hati. Silakan hubungi atau datang langsung ke toko kami.
        </p>

        <!-- Content -->
        <div class="mt-14 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div class="bg-white/90 p-10 rounded-xl shadow-md">
                <h3 class="font-display text-3xl text-center font-bold text-moss">Wira Bordir Computer</h3>

                <div class="grid gap-4 text-md mt-8 text-text-dark">

                    <!-- ALAMAT -->
                    <div class="grid grid-cols-[40px_1fr] gap-3 items-start mb-2">
                        <span class="mt-1.5">
                            <!-- SVG ALAMAT -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#344E41" viewBox="0 0 100 100" width="32" height="32">
                                <path d="M50.001 0C33.65 0 20.25 13.36 20.25 29.666c0 6.318 2.018 12.19 5.433 17.016L46.37 82.445c2.897 3.785 4.823 3.066 7.232-.2l22.818-38.83c.46-.834.822-1.722 1.137-2.629a29.28 29.28 0 0 0 2.192-11.12C79.75 13.36 66.354 0 50.001 0zm0 13.9c8.806 0 15.808 6.986 15.808 15.766c0 8.78-7.002 15.763-15.808 15.763c-8.805 0-15.81-6.982-15.81-15.763c0-8.78 7.005-15.765 15.81-15.765z" fill="#344E41"></path>
                            </svg>
                        </span>
                        <span class="leading-tight">
                            Tembung, Kec. Percut Sei Tuan, Kabupaten Deli Serdang, Sumatera Utara 20371, Indonesia
                        </span>
                    </div>

                    <!-- WHATSAPP -->
                    <div class="grid grid-cols-[40px_1fr] gap-3 items-start mb-2">
                        <span class="ml-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#344E41" viewBox="0 0 24 24" width="24" height="24">
                                <path d="M.057 24l1.687-6.163a11.867 11.867 0 01-1.587-5.96C.155 5.3 5.366 0 12.02 0c3.184 0 6.167 1.24 8.413 3.488a11.82 11.82 0 013.495 8.414c-.003 6.653-5.312 11.865-11.98 11.865a11.9 11.9 0 01-5.958-1.594L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.593 5.448 0 9.886-4.434 9.889-9.877.003-5.462-4.415-9.89-9.881-9.893-5.46-.003-9.89 4.422-9.893 9.887a9.822 9.822 0 001.588 5.258l-.999 3.648 3.904-1.616zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.867-2.03-.967-.272-.099-.47-.148-.668.149-.198.297-.767.966-.94 1.164-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.149-.173.198-.297.297-.495.099-.198.05-.372-.025-.521-.074-.149-.668-1.611-.916-2.21-.242-.579-.487-.5-.668-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.007-1.413.248-.694.248-1.289.173-1.413z"/>
                            </svg>
                        </span>
                        <span class="leading-tight">WhatsApp : 0823-7379-5900</span>
                    </div>

                    <!-- JAM -->
                    <div class="grid grid-cols-[40px_1fr] gap-3 items-start">
                        <span class="mt-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none">
                                <path d="M12 7V12L9.5 13.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#344E41" stroke-width="2"/>
                            </svg>
                        </span>
                        <span class="leading-tight">
                            Senin - Jumat : 08.00 - 20.00 WIB <br>
                            Sabtu - Minggu : 09.00 - 18.00 WIB
                        </span>
                    </div>

                </div>
            </div>

            <!-- Google Maps -->
            <div class="relative rounded-xl overflow-hidden shadow-md h-[350px] md:h-[420px] lg:h-full">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d248.8696047295145!2d98.75524042576026!3d3.607231165845517!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303136b1a0bb5349%3A0x9048080e5e3fe958!2sWira%20Bordir%20Computer!5e0!3m2!1sid!2sus!4v1764038135575!5m2!1sid!2sus" 
                    width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </div>
</section>

{{-- ========================== --}}
{{--          /STYLES           --}}
{{-- ========================== --}}
@push('styles')
    
@endpush

{{-- ========================== --}}
{{--          /SCRIPTS          --}}
{{-- ========================== --}}
@push('scripts')
    <script>
        let lastScrollY = window.scrollY;
        let hideTimeout;

        window.addEventListener("scroll", () => {
            const navbar = document.getElementById("navbar");

            // Jika user kembali ke paling atas (hero)
            if (window.scrollY <= 10) {
                clearTimeout(hideTimeout);
                navbar.classList.remove("-translate-y-full", "opacity-0");
                return; // Stop di sini
            }

            // Scroll ke bawah
            if (window.scrollY > lastScrollY) {
                clearTimeout(hideTimeout);

                // Delay sebelum hide
                hideTimeout = setTimeout(() => {
                    navbar.classList.add("-translate-y-full", "opacity-0");
                }, 1500);

            } else {
                // Scroll ke atas → tampil
                navbar.classList.remove("-translate-y-full", "opacity-0");
            }

            lastScrollY = window.scrollY;
        });
    </script>
@endpush

@endsection
