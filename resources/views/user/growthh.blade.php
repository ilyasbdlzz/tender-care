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
                <div class="w-full flex items-center justify-center my-5">
                    <i class="fa-solid fa-pen-to-square text-[5rem] text-[#7342D4]"></i>
                </div>

                <div class="my-3">
                    <ul class="flex justify-between border-b-2 border-[#F0D7E7]">
                      <li class="px-20  text-2xl font-semibold font-nunito border-b-2 border-transparent hover:border-[#492F59] transition-colors duration-300 text-[#492F59] cursor-pointer">
                          <a href="{{ asset('growthhistory') }}">Growth Record</a>
                      </li>
                      <li class="px-20 text-2xl font-semibold font-nunito border-b-2 border-[#492F59]  text-[#492F59] cursor-pointer">
                          <a href="{{ asset('healthhistory') }}">Health Record</a>
                      </li>
                    </ul>
                  </div>


                  
        
                <!-- Table Section -->
                <div class="w-full my-10">
                    <table class="min-w-full bg-white border border-gray-300 rounded-md text-center">
                        <thead class="bg-[#7342D4] text-white">
                            <tr>
                                <th class="py-3 px-4 border-b">No</th>
                                <th class="py-3 px-4 border-b">Tanggal</th>
                                <th class="py-3 px-4 border-b">Berat Badan (kg)</th>
                                <th class="py-3 px-4 border-b">Tinggi Badan (cm)</th>
                                <th class="py-3 px-4 border-b">Lingkar Kepala (cm)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($growthh as $growth)
                            <tr>
                                <td>{{ $growth->id }}</td>
                                <td>{{ $growth->date }}</td>
                                <td>{{ $growth->height }}</td>
                                <td>{{ $growth->weight }}</td>
                                <td>{{ $growth->head }}</td>
                            </tr>
                            @endforeach
                            <!-- Add more rows here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </x-slot>
</x-layout>

<x-footer></x-footer>
