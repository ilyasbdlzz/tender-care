<x-navbar></x-navbar>

<x-layout> 
    <x-slot name="page_name">Tender Care</x-slot>
    <x-slot name="page_header">
        <body class="bg-[#E8DCFF]">
        </body>  
    </x-slot>
    <x-slot name="page_content">
        <!-- Consuling -->
        <section class="my-5 mx-6 lg:mx-12">
            <div class="bg-white w-full shadow-lg px-8 py-10 flex flex-col items-center rounded-md">
                <!-- Icon Section -->
                <div class="w-full flex items-center justify-center">
                    <i class="fa-solid fa-pen-to-square text-[5rem] text-[#7342D4]"></i>
                </div>
        
                <!-- Form Section -->
                <div class="w-full my-10">
                    <form method="POST" class="flex flex-col items-center mx-10">
                        
                 <!-- Tinggi Badan Input -->
                 <div class="mb-6 w-full flex">
                    <label for="berat_badan" class="block text-xl font-semibold mb-2 text-[#4A2C7D] w-1/3">Berat Badan</label>
                    <input type="number" id="berat_badan" name="berat_badan" class="w-full shadow-md p-4 border border-gray-300 rounded-lg bg-[#F3EEFF] focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Masukkan berat badan">
                </div>

                <!-- Tinggi Badan Input -->
                <div class="mb-6 w-full flex">
                    <label for="tinggi_badan" class="block text-xl font-semibold mb-2 text-[#4A2C7D] w-1/3">Tinggi Badan</label>
                    <input type="number" id="tinggi_badan" name="tinggi_badan" class="w-full shadow-md p-4 border border-gray-300 rounded-lg bg-[#F3EEFF] focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Masukkan tinggi badan">
                </div>

                <!-- Lingkar Kepala Input -->
                <div class="mb-6 w-full flex">

                    <label for="lingkar_kepala" class="block text-xl font-semibold mb-2 text-[#4A2C7D] w-1/3">Lingkar Kepala</label>
                    <input type="number" id="lingkar_kepala" name="lingkar_kepala" class="w-full shadow-md p-4 border border-gray-300 rounded-lg bg-[#F3EEFF] focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Masukkan lingkar kepala">
                </div>

            </form>

        </div>
    </div>
</section>

    </x-slot>
    
</x-layout>

<x-footer></x-footer>