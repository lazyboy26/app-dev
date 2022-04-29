@extends('layouts.app')

@section('container')
    {{-- Jumbotron --}}
    <div class="jumbotron">
        <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover" style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp'); height: 100vh;
                                ">
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.6)">
                <div class="flex justify-center items-center h-full">
                    <div class="text-white">
                        <h2 class="font-semibold text-4xl mb-4 justify-center flex">
                            <a class="text-white px-1 font-semibold" href="/">
                                <div class="flex">Shop
                                    <div class="text-rose-600">
                                        Now
                                    </div>
                                </div>
                            </a>
                        </h2>
                        <h4 class="font-semibold text-xl mb-6">Menyediakan apapun, dimanapun, dan kapanpun kamu butuh</h4>
                        <a class="inline-block px-7 py-3 mb-1 border-2 border-gray-200 text-gray-200 font-medium text-sm leading-snug uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 group-hover:cursor-pointer ease-in-out"
                            href="#!" role="button" data-mdb-ripple="true" data-mdb-ripple-color="light">Tentang Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Jumbotron --}}

    {{-- Content --}}

    <div class="content bg-white p-12 relative z-10">
        <h1 class="text-4xl mb-3 w-max mx-auto">Tentang Kami
            <div class="border-b-2 h-1 bg-rose-500"></div>
        </h1>
        <div class="grid grid-cols-1">
            <div class="desc-1 flex justify-center items-center">
                <div class="img-man">
                    <img class="scale-1"
                        src="https://media.istockphoto.com/photos/charming-handsome-picture-id528582811?k=20&m=528582811&s=612x612&w=0&h=ipjmeCeHebLM2I3443YETj148kCSbs1KQKqApTgAzmY="
                        alt="">
                </div>
                <div class="text-justify w-1/3">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus accusantium facilis animi assumenda
                        velit nobis aliquam dolores libero quia debitis quibusdam sint tempore, quo magnam ipsam eaque
                        quaerat distinctio voluptas rem. Facere voluptas id rem laboriosam voluptatem mollitia, laudantium
                        unde atque voluptatibus. Quas ipsam amet quisquam consectetur fugit magni cum?
                    </p>
                </div>
            </div>
            <div class="desc-2 flex items-center">
                <div class="text-justify w-1/3 relative left-48 z-10">
                    <p class="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus accusantium facilis animi assumenda
                        velit nobis aliquam dolores libero quia debitis quibusdam sint tempore, quo magnam ipsam eaque
                        quaerat distinctio voluptas rem. Facere voluptas id rem laboriosam voluptatem mollitia, laudantium
                        unde atque voluptatibus. Quas ipsam amet quisquam consectetur fugit magni cum?
                    </p>
                </div>
                <div class="img-girl w-1/2 relative">
                    <img class=""
                        src="https://images.unsplash.com/photo-1613918108466-292b78a8ef95?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8d29tYW4lMjB3aGl0ZSUyMGJhY2tncm91bmR8ZW58MHx8MHx8&w=1000&q=80"
                        alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- EndContent --}}

    {{-- Testimonial --}}
    <div class="container mx-auto my-12 relative">
        <h1 class="text-4xl mb-3 w-max mx-auto">Testimoni
            <div class="border-b-2 h-1 bg-rose-500"></div>
        </h1>
        <div id="carouselExampleCaptions" class="carousel slide relative carousel-dark" data-bs-ride="carousel">
            <div class="carousel-inner relative w-full overflow-hidden">
                <div class="carousel-item active relative float-left w-full text-center">
                    <p class="text-xl italic mx-auto text-gray-700 max-w-4xl">
                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                        numquam iure provident voluptate esse quasi, voluptas nostrum quisquam!"
                    </p>
                    <div class="mt-12 mb-6 flex justify-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                            class="rounded-full w-24 h-24 shadow-lg" alt="smaple image" />
                    </div>
                    <p class="text-gray-500">- Anna Morian</p>
                </div>
                <div class="carousel-item relative float-left w-full text-center">
                    <p class="text-xl italic mx-auto text-gray-700 max-w-4xl">
                        "Neque cupiditate assumenda in maiores repudiandae mollitia adipisci maiores
                        repudiandae mollitia consectetur adipisicing architecto elit sed adipiscing
                        elit."
                    </p>
                    <div class="mt-12 mb-6 flex justify-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(31).webp"
                            class="rounded-full w-24 h-24 shadow-lg" alt="smaple image" />
                    </div>
                    <p class="text-gray-500">- Teresa May</p>
                </div>
                <div class="carousel-item relative float-left w-full text-center">
                    <p class="text-xl italic mx-auto text-gray-700 max-w-4xl">
                        "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu fugiat nulla pariatur est laborum neque cupiditate assumenda in
                        maiores."
                    </p>
                    <div class="mt-12 mb-6 flex justify-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                            class="rounded-full w-24 h-24 shadow-lg" alt="smaple image" />
                    </div>
                    <p class="text-gray-500">- Kate Allise</p>
                </div>
            </div>
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    {{-- End Testimonial --}}
    {{-- Gallery --}}
    <div class="gallery container mx-auto my-12" >
        <div class="grid grid-cols-3">
            <div class="grid1">
                <div class="flex">
                    @for ($i = 1; $i <=3; $i++)
                    <div class="p-2 block group">
                        <img class="rounded group-hover:scale-105 group-hover:brightness-100 brightness-50 transition duration-500 group-hover:cursor-pointer" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" alt="">
                    </div>
                    @endfor
                </div>
                <div class="p-2 block group">
                    <img class="rounded group-hover:scale-105  group-hover:brightness-100 brightness-50 transition duration-500 group-hover:cursor-pointer" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" alt="">
                </div>
            </div>
            <div class="grid2">
                <div class="p-2 block group">
                    <h1 class="text-4xl py-5 w-max mx-auto">Gallery kami
                        <div class="border-b-2 h-1 bg-rose-500"></div>
                    </h1>
                </div>
                <div class="flex">
                    <div class="p-2 block group">
                        <img class="rounded group-hover:scale-105  group-hover:brightness-100 brightness-50 transition duration-500 group-hover:cursor-pointer" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp" alt="">
                    </div>

                </div>
            </div>
            <div class="grid1">
                <div class="flex">
                    @for ($i = 1; $i <=3; $i++)
                    <div class="p-2 block group">
                        <img class="rounded group-hover:scale-105 group-hover:brightness-100 brightness-50 transition duration-500 group-hover:cursor-pointer" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" alt="">
                    </div>
                    @endfor
                </div>
                <div class="p-2 block group">
                    <img class="rounded group-hover:scale-105  group-hover:brightness-100 brightness-50 transition duration-500 group-hover:cursor-pointer" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- EndGallery --}}
@endsection
