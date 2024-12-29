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
            <div class="bg-white w-full shadow-lg px-5 py-3 flex relative rounded-md">
                <img src="{{('../admin/dist/img/psicholog.png')}}" class="bg-gray-50 rounded-full w-20 h-20 border-black border-b-1 shadow-lg" alt="">
                <h3 class="align-bottom pt-8 ps-3 font-nunito font-bold">Counseling Registration</h3>
                <!-- Icon -->
                <div class="icon rounded-full border-2 border-[#471637] w-10 h-10 absolute top-3 right-3 flex items-center justify-center my-5">
                    <i class="fas fa-message text-[#471637]"></i>
                </div>
            </div>
        </section>
        

        <!-- Health Record -->
        <section class="container mx-auto px-6 lg:px-12 my-16">
            <h3 class="text-2xl font-semibold my-2">Health Record</h3>
            <h3 class="text-sm my-2">Catat Perkembangan Bayi Anda</h3>
            
                <div class="flex flex-wrap justify-center space-x-5">
                    <!-- Card 1 -->
                    <div class="flex-none bg-white rounded-lg shadow-lg w-full sm:w-2/6 p-5 group relative overflow-hidden flex mb-5 sm:mb-0">
                        <!-- Icon Section -->
                        <div class="w-2/5 flex items-center justify-center">
                            <i class="fa-solid fa-baby text-[5rem] text-[#7342D4]"></i>
                        </div>
                        <!-- Content Section -->
                        <div class="w-3/5 flex flex-col justify-center pl-4">
                            <h3 class="text-xl font-semibold text-[#8C52FF] mb-3">Growth Record</h3>
                            <button class="bg-[#E8DCFF] rounded-lg p-2 text-sm font-bold text-gray-800 w-1/2 self-center">Start</button>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="flex-none bg-white rounded-lg shadow-lg w-full sm:w-2/6 p-5 group relative overflow-hidden flex mb-5 sm:mb-0">
                        <!-- Icon Section -->
                        <div class="w-2/5 flex items-center justify-center">
                            <i class="fa-solid fa-heart-pulse text-[5rem] text-[#7342D4]"></i>
                        </div>
                        <!-- Content Section -->
                        <div class="w-3/5 flex flex-col justify-center pl-4">
                            <h3 class="text-xl font-semibold text-[#8C52FF] mb-3">Health Record</h3>
                            <button class="bg-[#E8DCFF] rounded-lg p-2 text-sm font-bold text-gray-800 w-1/2 self-center">Start</button>
                        </div>
                    </div>
                </div>
        </section>


                <!-- Article Section -->
                <section class="bg-[#DDCBFF] py-8">
                    <div class="container mx-auto px-6 lg:px-12">
                    <!-- Section Title -->
                    <div class="border-l-4 border-[#623E76] pl-4 mb-6">
                        <h1 class="font-nunito font-bold text-3xl">What New Today</h1>
                    </div>
                
                    <!-- Content Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <!-- Left Large Column -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                        <!-- Placeholder for content -->
                        <p class="text-center text-gray-500">Large article section (add content here).</p>
                        </div>
                
                        <!-- Right Column -->
                        <div class="lg:col-span-2 grid gap-6">
                        <!-- Article Card -->
                        <div class="flex items-start">
                            <!-- Thumbnail -->
                            <div class="bg-gray-200 rounded-lg w-2/5 h-28"></div>
                            <!-- Article Details -->
                            <div class="ml-4 flex flex-col justify-between">
                            <!-- Category Label -->
                            <span class="bg-[#88A8CD] text-white font-nunito w-3/12 text-center font-semibold rounded-full px-3 py-1 text-xs">
                                Health
                            </span>
                            <!-- Title -->
                            <h2 class="mt-2 text-base font-semibold">
                                Viral! Fufufafa adalah Gibran Rakabuming
                            </h2>
                            <!-- Date -->
                            <div class="flex items-center text-xs text-gray-500 mt-2">
                                <i class="fas fa-calendar"></i>
                                <p class="ml-1">October 22, 2024</p>
                            </div>
                            </div>
                        </div>
                
                        <!-- Repeat Article Card -->
                        <div class="flex items-start">
                            <div class="bg-gray-200 rounded-lg w-2/5 h-28"></div>
                            <div class="ml-4 flex flex-col justify-between">
                            <span class="bg-[#88A8CD] text-white font-nunito w-3/12 text-center font-semibold rounded-full px-3 py-1 text-xs">
                                Health
                            </span>
                            <h2 class="mt-2 text-base font-semibold">
                                Viral! Fufufafa adalah Gibran Rakabuming
                            </h2>
                            <div class="flex items-center text-xs text-gray-500 mt-2">
                                <i class="fas fa-calendar"></i>
                                <p class="ml-1">October 22, 2024</p>
                            </div>
                            </div>
                        </div>
                
                        <!-- Repeat Article Card -->
                        <div class="flex items-start">
                            <div class="bg-gray-200 rounded-lg w-2/5 h-28"></div>
                            <div class="ml-4 flex flex-col justify-between">
                            <span class="bg-[#88A8CD] text-white font-nunito w-3/12 text-center font-semibold rounded-full px-3 py-1 text-xs">
                                Health
                            </span>
                            <h2 class="mt-2 text-base font-semibold">
                                Viral! Fufufafa adalah Gibran Rakabuming
                            </h2>
                            <div class="flex items-center text-xs text-gray-500 mt-2">
                                <i class="fas fa-calendar"></i>
                                <p class="ml-1">October 22, 2024</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </section>
    </x-slot>
    
</x-layout>

<x-footer></x-footer>