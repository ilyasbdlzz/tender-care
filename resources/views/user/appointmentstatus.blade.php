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
                <h2 class="text-2xl font-semibold mb-6">Counseling Registration - Status</h2>
        
                <!-- Table Section -->
                <div class="w-full my-10">
                    <table class="min-w-full bg-white border border-gray-300 rounded-md text-center">
                        <thead class="">
                            <tr>
                                <th class="py-3 px-4 border-b">No</th>
                                <th class="py-3 px-4 border-b">Nama Pasien</th>
                                <th class="py-3 px-4 border-b">Nama Psikolog</th>
                                <th class="py-3 px-4 border-b">Tanggal Konseling</th>
                                <th class="py-3 px-4 border-b">Jam Konseling</th>
                                <th class="py-3 px-4 border-b">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-3 px-4 border-b">1</td>
                                <td class="py-3 px-4 border-b">Elyas Randi Renaldi</td>
                                <td class="py-3 px-4 border-b">Ilyas Abdul Aziz</td>
                                <td class="py-3 px-4 border-b">27 Oktober 2025</td>
                                <td class="py-3 px-4 border-b">12.00 pm</td>
                                <td class="py-3 px-4"><button type="submit" 
                                    class="bg-[#319F43] text-white font-semibold py-2 px-4 rounded hover:bg-[#45c75a] shadow-md">Diterima</button>
                            </div></td>
 
                            </tr>
                            <!-- Add more rows here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </x-slot>
</x-layout>

<x-footer></x-footer>
