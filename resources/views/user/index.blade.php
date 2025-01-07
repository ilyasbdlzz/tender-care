<x-navbar></x-navbar>

<x-layout> 
    <x-slot name="page_name">Tender Care</x-slot>
    <x-slot name="page_header">
        <body class="bg-[#E8DCFF]">
            <!-- Carousel Section -->
            <section class="container mx-auto mt-10 mb-10 px-4">
                <div class="relative">
                <!-- Carousel Container -->
                <div id="carousel" class="overflow-hidden rounded-lg shadow-2xl max-w-4xl mx-auto relative">
                    <div class="flex transition-transform duration-700 ease-out w-full" style="transform: translateX(0);">
                        <!-- Slide 1 -->
                        <div class="relative w-full flex-shrink-0">
                            <img src="{{('../admin/dist/img/child5.jpeg')}}" class="w-full h-80 object-cover" alt="Meditation 1">
                            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="relative w-full flex-shrink-0">
                            <img src="{{('../admin/dist/img/child3.jpeg')}}" class="w-full h-80 object-cover" alt="Meditation 2">
                            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="relative w-full flex-shrink-0">
                            <img src="{{('../admin/dist/img/child2.jpeg')}}" class="w-full h-80 object-cover" alt="Meditation 3">
                            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                        </div>
                    </div>
                </div>

        
                    <!-- Carousel Controls -->
                    <button id="prev" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-600 text-white p-2 rounded-full hover:bg-gray-800">
                        &larr;
                    </button>
                    <button id="next" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-600 text-white p-2 rounded-full hover:bg-gray-800">
                        &rarr;
                    </button>
                </div>
            </section>
        
            <!-- JavaScript for Carousel Functionality -->
            <script>
                const carousel = document.getElementById('carousel');
                const slides = carousel.children[0];
                const totalSlides = slides.children.length;
                const prevBtn = document.getElementById('prev');
                const nextBtn = document.getElementById('next');
                let currentIndex = 0;
        
                prevBtn.addEventListener('click', () => {
                    currentIndex = (currentIndex === 0) ? totalSlides - 1 : currentIndex - 1;
                    updateCarousel();
                });
        
                nextBtn.addEventListener('click', () => {
                    currentIndex = (currentIndex === totalSlides - 1) ? 0 : currentIndex + 1;
                    updateCarousel();
                });
        
                function updateCarousel() {
                    slides.style.transform = `translateX(-${currentIndex * 100}%)`;
                }
            </script>
        </body>  
    </x-slot>
    <x-slot name="page_content">

        <!-- Consuling -->

        <section class="my-20 mx-6 lg:mx-12">
            <a href="/appointment" class="block group"> <!-- Tambahkan class 'group' untuk mengontrol animasi hover -->
                <div class="bg-white w-full shadow-lg px-5 py-3 flex relative rounded-md transition-transform duration-300 group-hover:scale-105 group-hover:shadow-2xl">
                    <img src="{{('../admin/dist/img/psicholog.png')}}" class="bg-gray-50 rounded-full w-20 h-20 border-black border-b-1 shadow-lg transition-transform duration-300 group-hover:rotate-12" alt="">
                    <h3 class="align-bottom pt-8 ps-3 font-nunito font-bold transition-colors duration-300 group-hover:text-[#471637]">
                        Counseling Registration
                    </h3>
                    <!-- Icon -->
                    <div class="icon rounded-full border-2 border-[#471637] w-10 h-10 absolute top-3 right-3 flex items-center justify-center my-5 transition-transform duration-300 group-hover:rotate-45">
                        <i class="fas fa-message text-[#471637]"></i>
                    </div>
                </div>
            </a>
        </section>
        
        

        <!-- Health Record -->
<section class="container mx-auto px-6 lg:px-12 my-16">
    <h3 class="text-2xl font-semibold my-2">Health Record</h3>
    <h3 class="text-sm my-2">Catat Perkembangan Bayi Anda</h3>
    
    <div class="flex flex-wrap justify-center space-x-5">
        <!-- Card 1: Growth Record -->
        <a href="/growthrecord" class="flex-none bg-white rounded-lg shadow-lg w-full sm:w-2/6 p-5 group relative overflow-hidden flex mb-5 sm:mb-0 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
            <!-- Icon Section -->
            <div class="w-2/5 flex items-center justify-center transform transition-transform duration-300 group-hover:rotate-6">
                <i class="fa-solid fa-baby text-[5rem] text-[#7342D4]"></i>
            </div>
            <!-- Content Section -->
            <div class="w-3/5 flex flex-col justify-center pl-4">
                <h3 class="text-xl font-semibold text-[#8C52FF] mb-3 group-hover:text-[#7342D4]">Growth Record</h3>
                <button class="bg-[#E8DCFF] rounded-lg p-2 text-sm font-bold text-gray-800 w-1/2 self-center transform transition-transform duration-300 group-hover:scale-110">
                    Start
                </button>
            </div>
        </a>
        
        <!-- Card 2: Health Record -->
        <a href="/healthrecord" class="flex-none bg-white rounded-lg shadow-lg w-full sm:w-2/6 p-5 group relative overflow-hidden flex mb-5 sm:mb-0 transform transition-all duration-500 hover:scale-100 hover:shadow-lg hover:bg-[#F4EBFF]">
            <!-- Icon Section -->
            <div class="w-2/5 flex items-center justify-center transform transition-transform duration-500 group-hover:-rotate-12">
                <i class="fa-solid fa-heart-pulse text-[5rem] text-[#7342D4]"></i>
            </div>
            <!-- Content Section -->
            <div class="w-3/5 flex flex-col justify-center pl-4">
                <h3 class="text-xl font-semibold text-[#8C52FF] mb-3 group-hover:text-[#471637]">Health Record</h3>
                <button class="bg-[#E8DCFF] rounded-lg p-2 text-sm font-bold text-gray-800 w-1/2 self-center transform transition-transform duration-500 group-hover:scale-125">
                    Start
                </button>
            </div>
        </a>
    </div>
</section>



        <!-- Article Section -->
        <section class="bg-[#DDCBFF] py-8">
            <div class="container mx-auto px-6 lg:px-12">
                <div class="border-l-4 border-[#623E76] pl-4 mb-6">
                    <h1 class="font-nunito font-bold text-3xl">What New Today</h1>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Article Pertama sebagai Artikel Besar -->
                    @if ($articles->first())
                        <div class="col-span-1 lg:col-span-1 bg-white p-6 rounded-lg shadow-md">
                            <div class="h-48 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center text-gray-500 text-sm mb-2">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 1.75C6.615 1.75 2.25 6.115 2.25 11.5S6.615 21.25 12 21.25 21.75 16.885 21.75 11.5 17.385 1.75 12 1.75zM12 19.25a7.75 7.75 0 1 1 0-15.5 7.75 7.75 0 0 1 0 15.5zm.625-12.25a.75.75 0 1 0-1.5 0v4.375a.75.75 0 0 0 .75.75h3.125a.75.75 0 1 0 0-1.5H12.625V7z"/>
                                        </svg>
                                        <span>{{ $articles->first()->created_at->format('d M Y') }}</span>
                                    </div>
                                    <h2 class="font-semibold text-lg text-gray-800">
                                        {{ $articles->first()->title }}
                                    </h2>
                                    <p class="text-gray-600 mt-2 text-sm">
                                        {{ Str::limit($articles->first()->content, 150, '...') }}
                                    </p>
                                </div>
                                <a href="{{ url('detail', $articles->first()->id) }}" class="mt-4 px-4 py-2 bg-[#7342D4] text-white text-sm rounded shadow hover:bg-[#8C52FF] text-center self-start">Baca Selengkapnya</a>
                            </div>
                        </div>
                    @endif
        
                    <!-- Artikel-artikel Lainnya -->
                    <div class="flex flex-col gap-4">
                        @foreach ($articles->skip(1) as $article)
                            <div class="flex flex-col bg-white p-4 rounded-lg shadow-md">
                                <div class="flex items-center text-gray-500 text-sm mb-2">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 1.75C6.615 1.75 2.25 6.115 2.25 11.5S6.615 21.25 12 21.25 21.75 16.885 21.75 11.5 17.385 1.75 12 1.75zM12 19.25a7.75 7.75 0 1 1 0-15.5 7.75 7.75 0 0 1 0 15.5zm.625-12.25a.75.75 0 1 0-1.5 0v4.375a.75.75 0 0 0 .75.75h3.125a.75.75 0 1 0 0-1.5H12.625V7z"/>
                                    </svg>
                                    <span>{{ $article->created_at->format('d M Y') }}</span>
                                </div>
                                <h2 class="font-semibold text-sm text-gray-800">
                                    {{ $article->title }}
                                </h2>
                                <p class="text-gray-600 mt-2 text-sm">
                                    {{ Str::limit($article->content, 100, '...') }}
                                </p>
                                <a href="{{ url('detail', $article->id) }}" class="mt-4 px-4 py-2 bg-[#7342D4] text-white text-sm rounded shadow hover:bg-[#8C52FF] text-center self-start">Baca Selengkapnya</a>
                            </div>
                        @endforeach
        
                        @if ($articles->skip(1)->isEmpty())
                            <p class="text-center text-gray-500">Belum ada artikel tambahan yang tersedia.</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        

    </x-slot>
    
</x-layout>

<x-footer></x-footer>