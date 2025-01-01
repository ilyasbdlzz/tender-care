<x-navbar></x-navbar>

<x-layout>
    <x-slot name="page_name">Tender Care</x-slot>
    <x-slot name="page_header">
        <body class="bg-[#E8DCFF]">
        </body>  
    </x-slot>
    <x-slot name="page_content">
        <!-- Form Section -->
        <div class="mx-10">
        <div class="bg-white shadow-lg rounded-md p-6 w-full px-5 my-10">
            <h2 class="text-2xl font-semibold mb-6">Counseling Registration</h2>
            <form class="space-y-4 my-10">
                <div class="flex items-center space-x-4 my-5">
                    <label for="namaLengkap" class="block text-gray-700 text-sm font-bold w-1/3">Nama Lengkap</label>
                    <input type="text" id="namaLengkap" value="Ilyas Abdul Aziz Ps.g" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-[#8C52FF]">
                </div>

                <div class="flex items-center space-x-4 my-5">
                    <label for="namaPsikolog" class="block text-gray-700 text-sm font-bold w-1/3">Nama Psikolog</label>
                    <select id="namaPsikolog" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-[#8C52FF]">
                        <option value="Ilyas Abdul Aziz Ps.g" selected>Ilyas Abdul Aziz Ps.g</option>
                    </select>
                </div>

                <div class="flex items-center space-x-4 my-5">
                    <label for="tanggalKonseling" class="block text-gray-700 text-sm font-bold w-1/3">Tanggal Konseling</label>
                    <input type="date" id="tanggalKonseling" value="2024-03-11" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-[#8C52FF]">
                </div>

                <div class="flex items-center space-x-4 my-5">
                    <label for="jamKonseling" class="block text-gray-700 text-sm font-bold w-1/3">Jam Konseling</label>
                    <input type="time" id="jamKonseling" value="12:00" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-[#8C52FF]">
                </div>

                <div class="flex justify-end space-x-4 mt-4">
                    <button type="button" 
                        class="bg-gray-500 text-white font-semibold py-2 px-4 rounded hover:bg-gray-600 shadow-md">Batal</button>
                    <button type="submit" 
                        class="bg-[#8C52FF] text-white font-semibold py-2 px-4 rounded hover:bg-[#7A47E0] shadow-md">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    </x-slot>
</x-layout>
<x-footer></x-footer>