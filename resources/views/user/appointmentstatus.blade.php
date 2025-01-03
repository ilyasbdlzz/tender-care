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
                                <th class="py-3 px-4 border-b">Nama Psikolog</th>
                                <th class="py-3 px-4 border-b">Tanggal Konseling</th>
                                <th class="py-3 px-4 border-b">Jam Konseling</th>
                                <th class="py-3 px-4 border-b">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($counselings as $consul)
                            <tr>
                                <td class="py-3 px-4 border-b">{{ $consul->id }}</td>
                                    <td class="py-3 px-4 border-b">
                                        {{ $consul->medic->users->name ?? 'Psikolog tidak ditemukan' }}
                                    </td>
                                <td class="py-3 px-4 border-b">{{ $consul->date }}</td>
                                <td class="py-3 px-4 border-b">{{ $consul->clock }}</td>
                                <td class="py-3 px-4"><button type="submit" 
                                    class="bg-[#319F43] text-white font-semibold py-2 px-4 rounded hover:bg-[#45c75a] shadow-md">{{ $consul->status }}</button>
                            </div>
                        </td>
                            </tr>
                            @endforeach
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
