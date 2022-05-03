@extends('layouts.app')

@section('container')
    {{-- Carousel --}}
    <div id="carouselExampleSlidesOnly" class="carousel slide relative" data-bs-ride="carousel">
        <div class="carousel-inner relative w-full h-80 overflow-hidden">
            <div class="carousel-item active relative float-left w-full">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="block h-80 w-full" alt="Wild Landscape" />
            </div>
            <div class="carousel-item relative float-left w-full">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="block h-80 w-full" alt="Camera" />
            </div>
            <div class="carousel-item relative float-left w-full">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="block h-80 w-full" alt="Exotic Fruits" />
            </div>
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.6)">
                <div class="flex justify-center items-center h-full">
                    <div class="text-white">
                        <h2 class="font-semibold text-4xl mb-4 text-center">Belanja Mudah</h2>
                        <h4 class="font-semibold text-xl mb-6 text-center">Belanja Murah</h4>
                        <a class=" px-7 py-3 mb-1 border-2 border-gray-200 text-gray-200 font-medium text-sm leading-snug uppercase rounded hover:bg-white hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out justify-center flex selection:bg-transparent"
                            href="/shop" role="button" data-mdb-ripple="true" data-mdb-ripple-color="light">Belanja
                            Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Carousel --}}

    {{-- Card --}}
    <div class="cards mt-9 container mx-auto mb-10 px-5 md:px-0">
        <h1 class="text-4xl mb-3 w-max font-semibold"> Promo Produk
            <div class="border-b-2 h-1 bg-rose-500"></div>
        </h1>
        <div class="cards-row gap-4 grid grid-cols-2 md:grid-cols-6">
            @for ($i = 1; $i <= 12; $i++)
                <div class="relative cards-product bg-white rounded-lg p-5 border-rose-500 border-4 w-full">
                    <i class="absolute top-0 -left-0.5 bg-rose-500 w-min p-1 px-2 rounded-br font-semibold text-white">
                        Promo
                    </i>
                    <div class="img rounded-t mt-7">
                        <a href="">
                            <img src="https://id-test-11.slatic.net/p/f01403bdf57a55e132ee1c59765ebfc4.jpg_720x720q80.jpg_.webp"
                                alt="">
                        </a>
                    </div>
                    <div class="desc text-justify my-2">
                        <a href="#" class="product-name text-xl font-bold">
                            Baju Distro Pria Hitam
                        </a>
                        <p class="text-sm my-2">
                            <s class="text-rose-300">Rp.100.000</s>
                            <span class="text-rose-500">Rp.50.000 </span>
                        </p>
                    </div>
                    <a href="#" class="w-full text-white">
                        <p type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                            class="inline-block px-6 py-2.5 bg-rose-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-rose-700 hover:shadow-lg focus:bg-rose-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-800 active:shadow-lg transition duration-150 ease-in-out w-full text-center">
                            Detail
                        </p>
                    </a>
                </div>
            @endfor
        </div>
    </div>
    {{-- End Card --}}
@endsection
