<x-navbar></x-navbar>

<x-layout>
    <x-slot name="page_name">Tender Care</x-slot>
    <x-slot name="page_header">
        <body class="bg-[#E8DCFF]"></body>
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
        <!-- Form Section -->
        <div class="mx-auto my-10 max-w-4xl">
            <div class="bg-white shadow-lg rounded-md p-6 w-full">
                <h2 class="text-2xl font-semibold mb-6">Counseling Registration</h2>
                <form method="POST" action="{{ route('appointmentstatus.store') }}">
                    @csrf

                    <input type="hidden" name="iduser" value="{{ auth()->id() }}">
                    <input type="hidden" name="status" value="Pending">

                    <!-- Nama Psikolog -->
                    <div class="flex items-center space-x-4 my-5">
                        <label for="medis_id" class="block text-gray-700 text-sm font-bold w-1/3">
                            Nama Psikolog
                        </label>


                        <select id="medis_id" name="medis_id" class="form-contro shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-[#8C52FF]">
                            <option value="">Pilih Nama Psikolog</option>
                            @if($counselings->isEmpty())
                                <option value="">Tidak ada data</option>
                            @else
                                @foreach($counselings as $counseling)
                                    <option value="{{ $counseling->idmedis }}">{{ $counseling->users->name ?? 'Tidak Ditemukan' }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>


                    <!-- Tanggal Konseling -->
                    <div class="flex items-center space-x-4 my-5">
                        <label for="date" class="block text-gray-700 text-sm font-bold w-1/3">
                            Tanggal Konseling
                        </label>
                        <input type="date" id="date" name="date" 
                            value="2024-03-11"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-[#8C52FF]">
                    </div>

                    <!-- Jam Konseling -->
                    <div class="flex items-center space-x-4 my-5">
                        <label for="clock" class="block text-gray-700 text-sm font-bold w-1/3">
                            Jam Konseling
                        </label>
                        <input type="time" id="clock" name="clock"
                            value="12:00"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-[#8C52FF]">
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end space-x-4 mt-4">
                        <button type="button"
                            class="bg-gray-500 text-white font-semibold py-2 px-4 rounded hover:bg-gray-600 shadow-md">
                            Batal
                        </button>
                        <button type="submit"
                            class="bg-[#8C52FF] text-white font-semibold py-2 px-4 rounded hover:bg-[#7A47E0] shadow-md">
                            Kirim
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout>

<x-footer></x-footer>
