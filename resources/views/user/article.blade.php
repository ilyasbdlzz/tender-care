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
                
                <!-- Article Image -->
                <img src="{{('../admin/dist/img/child5.jpeg')}}" class="w-full my-3 h-1/2 rounded" alt="Article Image">
                
                <!-- Article Title -->
                <h1 class="text-2xl font-semibold mb-2 my-4">
                    Mindfulness dan Kesehatan Mental: Cara Hidup di Saat Ini untuk Mengurangi Stres
                </h1>
                
                <!-- Article Metadata -->
                <p class="text-sm text-gray-500 mb-6">
                    Nov 18, 2024 • 5 min read
                </p>
                
                <!-- Placeholder for additional article content -->
                <div class="bg-blue-200 h-56 mb-6"></div>
                
                <!-- Article Content -->
                <p class="text-gray-800 mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pharetra vitae augue in gravida. 
                    Sed vitae ex et nisl cursus, auctor scelerisque augue ac, blandit lorem. Quisque eget erat quis felis 
                    cursus auctor. Donec vel libero tincidunt, ultrices nunc non, interdum lorem. Suspendisse potenti. 
                    Cras congue facilisis lorem, at tristique purus facilisis vel.
                </p>
                
                <p class="text-gray-800 mb-4">
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer varius 
                    lacus sit amet dolor hendrerit, at lacinia massa pharetra. In aliquet libero in arcu fermentum lacinia. 
                    Aliquam erat volutpat. Donec vitae eros a odio malesuada pharetra. Ut non ligula at ligula blandit accumsan 
                    nec at augue.
                </p>
                
                <p class="text-gray-800 mb-4">
                    Morbi fermentum est non arcu, consectetur adipiscing elit. Praesent pharetra vitae augue in gravida. Sed vitae 
                    ex et nisl cursus, auctor scelerisque augue ac, blandit lorem. Quisque eget erat quis felis cursus auctor. 
                    Donec vel libero tincidunt, ultrices nunc non, interdum lorem. Suspendisse potenti. Cras congue facilisis 
                    lorem, at tristique purus facilisis vel.
                </p>
            </div>
        </div>
    </x-slot>
</x-layout>

<x-footer></x-footer>
