<x-layout-admin>
  <x-slot name="page_name_admin">Dashboard</x-slot>
  <x-slot name="page_content_admin">
    <div class="row">
      @if (auth()->user()->role === 'TenagaMedis')
        <!-- Konseling -->
        <div class="col-lg-6 col-12 mb-3">
          <div class="small-box text-white" style="background-color: #17A2B8;">
            <div class="inner">
              <p>Konseling</p>
              <h3>{{$counselingCount }}</h3>
            </div>
            <div class="icon">
              <i class="fa-solid fa-comment-medical"></i>
            </div>
          </div>
        </div>
        <!-- Artikel -->
        <div class="col-lg-6 col-12 mb-3">
          <div class="small-box text-white" style="background-color: #B58FE3;">
            <div class="inner">
              <p>Article</p>
              <h3>{{$articleCount }}</h3>
            </div>
            <div class="icon">
              <i class="fa-solid fa-newspaper"></i>
            </div>
          </div>
        </div>
      @else
        <!-- Member -->
        <div class="col-lg-4 col-12 mb-3">
          <div class="small-box text-white" style="background-color: #8C52FF;">
            <div class="inner">
              <p>Member</p>
              <h3>{{ $memberCount }}</h3>
            </div>
            <div class="icon">
              <i class="fa-solid fa-user"></i>
            </div>
          </div>
        </div>
        <!-- Tenaga Medis -->
        <div class="col-lg-4 col-12 mb-3">
          <div class="small-box text-white" style="background-color: #A817B8">
            <div class="inner">
              <p>Tenaga Medis</p>
              <h3>{{ $medicCount }}</h3>
            </div>
            <div class="icon">
              <i class="fa-solid fa-user-doctor"></i>
            </div>
          </div>
        </div>
        <!-- Konseling -->
        <div class="col-lg-4 col-12 mb-3">
          <div class="small-box text-white" style="background-color: #17A2B8;">
            <div class="inner">
              <p>Konseling</p>
              <h3>{{$counselingCount }}</h3>
            </div>
            <div class="icon">
              <i class="fa-solid fa-comment-medical"></i>
            </div>
          </div>
        </div>
        <!-- Health Record -->
        <div class="col-lg-4 col-12 mb-3">
          <div class="small-box text-white" style="background-color: #9B70C4;">
            <div class="inner">
              <p>Health Record</p>
              <h3>{{$healthCount }}</h3>
            </div>
            <div class="icon">
              <i class="fa-solid fa-heart-pulse"></i>
            </div>
          </div>
        </div>
        <!-- Growth Record -->
        <div class="col-lg-4 col-12 mb-3">
          <div class="small-box" style="background-color: #C9A9F5;">
            <div class="inner">
              <p>Growth Record</p>
              <h3>{{$growthCount }}</h3>
            </div>
            <div class="icon">
              <i class="fa-solid fa-baby"></i>
            </div>
          </div>
        </div>
        <!-- Artikel -->
        <div class="col-lg-4 col-12 mb-3">
          <div class="small-box text-white" style="background-color: #B58FE3;">
            <div class="inner">
              <p>Article</p>
              <h3>{{$articleCount }}</h3>
            </div>
            <div class="icon">
              <i class="fa-solid fa-newspaper"></i>
            </div>
          </div>
        </div>
      @endif
    </div>
  </x-slot>
</x-layout-admin>