@extends('layouts.app')

@section('container')
    {{-- Carousel --}}
    <div id="carouselExampleSlidesOnly" class="carousel slide relative" data-bs-ride="carousel">
        <div class="carousel-inner relative w-full h-80 overflow-hidden">
            <div class="carousel-item active relative float-left w-full">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="block w-full" alt="Wild Landscape" />
            </div>
            <div class="carousel-item relative float-left w-full">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="block w-full" alt="Camera" />
            </div>
            <div class="carousel-item relative float-left w-full">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="block w-full" alt="Exotic Fruits" />
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
    <div class="cards mt-9 container mx-auto mb-10">
        <h1 class="text-4xl mb-3 w-max">Featured Produk
            <div class="border-b-2 h-1 bg-rose-500"></div>
        </h1>

        <div class="cards-row grid grid-cols-3 gap-4">
            @for ($i = 1; $i <= 9; $i++)
                <div class="flex justify-center">
                    <div class="flex flex-col md:flex-row md:max-w-xl bg-white shadow-lg">
                        <a href="" data-bs-toggle="modal" data-bs-target="#modalImg"
                            class="flex w-full group overflow-hidden rounded-tl-lg rounded-bl-lg">
                            <img class="w-full group-hover:scale-110 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg group-hover:brightness-100 brightness-50 transition duration-500"
                                src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg" alt="" />
                        </a>
                        <div class="p-6 flex flex-col justify-start relative">
                            <h5 class="text-gray-900 hover:text-gray-500 text-xl font-bold mb-2">
                                <a href="">
                                    Produk {{ $i }}
                                </a>
                            </h5>
                            <div
                                class="promo-tag block absolute right-0 top-0 bg-rose-600 p-1 px-2 text-white rounded-bl-lg rounded-tr-lg font-bold">
                                Promo</div>

                            <p class="text-gray-700 text-base mb-4">
                                This is a wider card with supporting text below as a natural lead-in to additional content.
                                This content
                                is a little bit longer.
                            </p>
                            <div class="flex space-x-2 justify-center">
                                <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                    class="w-full inline-block px-6 py-2.5 bg-rose-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-rose-700 hover:shadow-lg focus:bg-rose-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-800 active:shadow-lg transition duration-150 ease-in-out"
                                    data-bs-toggle="modal" data-bs-target="#ModalProduk">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    {{-- End Card --}}

    {{-- Modal --}}

    <!-- Button trigger modal -->
    {{-- <button type="button"
        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
        data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button> --}}

    <!-- Modal -->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="ModalProduk" tabindex="-1" aria-labelledby="ModalProduk" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-bold leading-normal text-gray-800" id="exampleModalLgLabel">
                        Detail Barang
                    </h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4 flex">
                    <img src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg" class="w-1/2 rounded"
                        alt="">
                    <div class="desc-modal ml-4">
                        <table>
                            <tr>
                                <td>Nama Produk</td>
                                <td>:</td>
                                <td>Produk ShoNow</td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td>Produk ShoNow</td>
                            </tr>
                            <tr>
                                <td>Toko</td>
                                <td>:</td>
                                <td>Produk ShoNow</td>
                            </tr>
                        </table>
                    </div>
                    <div class="flex space-x-2 justify-center relative">
                        <div class="absolute w-max bottom-0 right-0 flex">
                            <button type="button"
                                class="inline-block px-6 mx-2 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </button>
                            <button type="button"
                                class="inline-block px-6 py-2.5 bg-rose-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-rose-700 hover:shadow-lg focus:bg-rose-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-800 active:shadow-lg transition duration-150 ease-in-out ">Beli
                                Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Click Image --}}
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="modalImg" tabindex="-1" aria-labelledby="modalImg" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-bold leading-normal text-gray-800" id="exampleModalLgLabel">
                        Detail Image
                    </h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4 ">
                    <img src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg" class="w-1/2 mx-auto rounded"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Click Image --}}

    {{-- End Modal --}}

    {{-- Back To Top --}}
    <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
        class=" p-3 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out hidden bottom-5 right-5 fixed"
        id="btn-back-to-top">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="currentColor"
                d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
            </path>
        </svg>
    </button>

    <script>
        // Get the button
        let mybutton = document.getElementById('btn-back-to-top');

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = 'block';
            } else {
                mybutton.style.display = 'none';
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener('click', backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    {{-- End Back To Top --}}
@endsection
