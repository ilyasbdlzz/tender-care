<x-navbar></x-navbar>

<x-layout> 
    <x-slot name="page_name">Tender Care</x-slot>
    <x-slot name="page_header">
        <body class="bg-[#E8DCFF]">
        </body>  
    </x-slot>
    <x-slot name="page_content">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <!-- Consuling -->
        <section class="my-5 mx-6 lg:mx-12">
            <div class="bg-white w-full shadow-lg px-8 py-10 flex flex-col items-center rounded-md">
                <!-- Icon Section -->
                <div class="w-full flex items-center justify-center">
                    <i class="fa-solid fa-heart-pulse text-[5rem] text-[#7342D4]"></i>
                </div>
        
                <!-- Form Section -->
                <div class="w-full my-10">
                    <form method="POST" action="{{ route('healthhistory.store') }}" class="flex flex-col items-center mx-10">

                        @csrf

                        <!-- Obat-Obatan Input -->
                        <div class="mb-6 w-full flex">
                            <label for="drug" class="block text-xl font-semibold mb-2 text-[#4A2C7D] w-1/3">Obat-Obatan</label>
                            <input type="text" id="drug" name="drug" class="w-full shadow-md p-4 border border-gray-300 rounded-lg bg-[#F3EEFF] focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Masukkan Nama Obat" required>
                        </div>

                        <!-- Alergi Input -->
                        <div class="mb-6 w-full flex">
                            <label for="allergy" class="block text-xl font-semibold mb-2 text-[#4A2C7D] w-1/3">Alergi</label>
                            <input type="text" id="allergy" name="allergy" class="w-full shadow-md p-4 border border-gray-300 rounded-lg bg-[#F3EEFF] focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Masukkan Nama Alergi" required>
                        </div>

                        <!-- Tanggal Berobat Input -->
                        <div class="mb-6 w-full flex">
                            <label for="date" class="block text-xl font-semibold mb-2 text-[#4A2C7D] w-1/3">Tanggal Berobat</label>
                            <input type="date" id="date" name="date" class="w-full shadow-md p-4 border border-gray-300 rounded-lg bg-[#F3EEFF] focus:outline-none focus:ring-2 focus:ring-purple-500" required>
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
