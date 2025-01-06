<x-navbar></x-navbar>

<x-layout>
    <x-slot name="page_name">Tender Care</x-slot>
    <x-slot name="page_header">
        <body class="bg-[#E8DCFF]"></body>
    </x-slot>
    <x-slot name="page_content">
        <section class="container mx-auto mt-10 px-4 my-10">
            <div class="flex justify-between items-center px-3 mb-6">
                <h3 class="text-2xl font-semibold">Artikel</h3>
                <!-- Filter Form -->
                <form method="GET" action="" class="flex items-center">
                    <select name="sort" id="sort" class="border rounded py-1 text-sm px-2">
                        <option value="">Sort By</option>
                        <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest First</option>
                        <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Oldest First</option>
                        <option value="title_asc" {{ request('sort') == 'title_asc' ? 'selected' : '' }}>Title A-Z</option>
                        <option value="title_desc" {{ request('sort') == 'title_desc' ? 'selected' : '' }}>Title Z-A</option>
                    </select>
                    <button type="submit" class="flex items-center ml-2 text-[#7342D4]">
                        <i class="fa-solid fa-filter"></i>
                    </button>
                </form>
            </div>

            <div class="flex flex-wrap justify-between gap-6 p-2">
                <!-- Looping Artikel -->
                @forelse ($articles as $article)
                    <div class="flex flex-col bg-white rounded-lg shadow-lg w-full sm:w-64 p-4">
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 1.75C6.615 1.75 2.25 6.115 2.25 11.5S6.615 21.25 12 21.25 21.75 16.885 21.75 11.5 17.385 1.75 12 1.75zM12 19.25a7.75 7.75 0 1 1 0-15.5 7.75 7.75 0 0 1 0 15.5zm.625-12.25a.75.75 0 1 0-1.5 0v4.375a.75.75 0 0 0 .75.75h3.125a.75.75 0 1 0 0-1.5H12.625V7z"/>
                            </svg>
                            <span>{{ $article->created_at->format('d M Y') }}</span>
                        </div>
                        <h4 class="font-semibold mt-4 text-lg">{{ $article->title }}</h4>
                        <p class="text-gray-600 mt-2 text-sm">
                            {{ Str::limit($article->content, 100, '...') }}
                        </p>
                        <a href="{{ url('detail', $article->id) }}" class="mt-4 px-4 py-2 bg-[#7342D4] text-white text-sm rounded shadow hover:bg-[#8C52FF] text-center">Baca Selengkapnya</a>
                    </div>
                @empty
                    <p class="text-center text-gray-500">Belum ada artikel yang tersedia.</p>
                @endforelse
            </div>

            <!-- Pagination Links -->
            <div class="mt-6">
                {{ $articles->links() }}
            </div>
        </section>
    </x-slot>
</x-layout>

<x-footer></x-footer>
