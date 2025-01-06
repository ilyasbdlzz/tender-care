<x-navbar></x-navbar>

<x-layout>
    <x-slot name="page_header">
        <body class="bg-[#E8DCFF]"></body>
    </x-slot>

    <x-slot name="page_content">
        <!-- Main Content -->
        <div class="container mx-auto px-4 py-10">
            <!-- Article Section -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <!-- Article Title -->
                <h1 class="text-2xl font-semibold mb-2 my-4">
                    {{ $article->title }}
                </h1>

                <!-- Article Metadata -->
                <p class="text-sm text-gray-500 mb-6">
                    {{ $article->created_at->format('d M Y') }} &bull; {{ $article->read_time }} min read
                </p>

                <!-- Article Content -->
                <p class="text-gray-800 mb-4">
                    {{ $article->content }}
                </p>

                <!-- Back Button -->
                <a href="{{ url('article') }}" class="mt-4 px-4 py-2 bg-[#7342D4] text-white text-sm rounded shadow hover:bg-[#8C52FF]">
                    Kembali ke Artikel
                </a>
            </div>
        </div>
    </x-slot>
</x-layout>

<x-footer></x-footer>
