@extends('layouts.app')

@section('container')
    <div class="container mx-auto mt-5 mb-10">
        {{-- Heading shop --}}
        <div class="heading-shop flex justify-between">
            <h1 class="text-4xl mb-3 w-max">Semua Produk
                <div class="border-b-2 h-1 bg-rose-500"></div>
            </h1>

            {{-- Search Bar --}}
            <div class="flex justify-center">
                {{-- Kategori Button --}}
                <div class="flex justify-center mx-2">
                    <div>
                        <div class="dropstart relative">
                            <button
                                class="
                        dropdown-toggle
                        px-6
                        py-2.5
                        bg-rose-600
                        text-white
                        font-medium
                        text-xs
                        leading-tight
                        uppercase
                        rounded
                        shadow-md
                        hover:bg-rose-700 hover:shadow-lg
                        focus:bg-rose-700 focus:shadow-lg focus:outline-none focus:ring-0
                        active:bg-rose-800 active:shadow-lg active:text-white
                        transition
                        duration-150
                        ease-in-out
                        flex
                        items-center
                        whitespace-nowrap
                      "
                                type="button" id="dropdownMenuButton1s" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-left"
                                    class="w-1.5 mr-2" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 192 512">
                                    <path fill="currentColor"
                                        d="M192 127.338v257.324c0 17.818-21.543 26.741-34.142 14.142L29.196 270.142c-7.81-7.81-7.81-20.474 0-28.284l128.662-128.662c12.599-12.6 34.142-3.676 34.142 14.142z">
                                    </path>
                                </svg>
                                Kategori
                            </button>
                            <ul class="
                        dropdown-menu
                        min-w-max
                        absolute
                        hidden
                        bg-white
                        text-base
                        z-50
                        float-left
                        py-2
                        list-none
                        text-left
                        rounded-lg
                        shadow-lg
                        mt-1
                        m-0
                        bg-clip-padding
                        border-none
                      "
                                aria-labelledby="dropdownMenuButton1s">
                                <li>
                                    <a class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                                        href="#">Kategori 1</a>
                                </li>
                                <li>
                                    <a class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                                        href="#">Kategori 2</a>
                                </li>
                                <li>
                                    <a class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                                        href="#">Kategori 3</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- End Kategori Button --}}
                <div class="mb-3 xl:w-96">
                    <div class="input-group relative flex flex-wrap items-stretch w-full mb-4 rounded">
                        <input type="search"
                            class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Cari Produk" aria-label="Search" aria-describedby="button-addon2">
                        <span
                            class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded"
                            id="basic-addon2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
                                class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                </path>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            {{-- End Search Bar --}}

        </div>
        {{-- End Heading Shop --}}

        {{-- Cards --}}
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
        {{-- End Card --}}

        {{-- Modal --}}
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
                                    <td>Produk ShopNow</td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td>Produk ShopNow</td>
                                </tr>
                                <tr>
                                    <td>Toko</td>
                                    <td>:</td>
                                    <td>Produk ShopNow</td>
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
                        <img src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg"
                            class="w-1/2 mx-auto rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
        {{-- End Modal Click Image --}}

        {{-- End Modal --}}
    </div>
@endsection
