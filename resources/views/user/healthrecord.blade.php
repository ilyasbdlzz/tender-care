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
                    <i class="fa-solid fa-heart-pulse text-[5rem] text-[#7342D4]"></i>
                </div>
        
                <!-- Form Section -->
                <div class="w-full my-10">
                    <form method="POST" class="flex flex-col items-center mx-10">
                        
                 <!-- Tinggi Badan Input -->
                 <div class="mb-6 w-full flex">
                    <label for="drug" class="block text-xl font-semibold mb-2 text-[#4A2C7D] w-1/3">Obat-Obatan</label>
                    <input type="text" id="drug" name="drug" class="w-full shadow-md p-4 border border-gray-300 rounded-lg bg-[#F3EEFF] focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Masukkan Nama Obat">
                </div>

                <!-- Tinggi Badan Input -->
                <div class="mb-6 w-full flex">
                    <label for="allergy" class="block text-xl font-semibold mb-2 text-[#4A2C7D] w-1/3">Alergi</label>
                    <input type="text" id="allergy" name="allergy" class="w-full shadow-md p-4 border border-gray-300 rounded-lg bg-[#F3EEFF] focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Masukkan Nama Alergi">
                </div>

                <!-- Lingkar Kepala Input -->
                <div class="mb-6 w-full flex">

                    <label for="immun" class="block text-xl font-semibold mb-2 text-[#4A2C7D] w-1/3">Imunisasi</label>
                    <input type="text" id="immun" name="immun" class="w-full shadow-md p-4 border border-gray-300 rounded-lg bg-[#F3EEFF] focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Masukkan Nama Imunisasi">
                </div>
                <div class="button flex gap-4 mt-6 w-full justify-end">
                    <button type="reset" class="bg-[#dedede] text-[#000000] py-2 px-4 rounded-md hover:bg-purple-800 transition duration-300">Cancel</button>
                    <button type="submit" class="bg-[#8C52FF]  text-white py-2 px-4 rounded-md hover:bg-purple-800 transition duration-300">Submit</button>
                </div>

                
                

            </form>

        </div>
    </div>
</section>

    </x-slot>
    
</x-layout>

<x-footer></x-footer>