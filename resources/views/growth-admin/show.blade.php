<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Growth Record / Show</x-slot>
    <x-slot name="page_title">Detail Growth Record</x-slot>
    
    <x-slot name="page_content_admin">
        @if($growth !== null)
        <div class="card">
            <div class="card-header text-white" style="background: #A375FF;">
                <h4>View Growth Record</h4>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Nama Pasien</div>
                    <div class="col-sm-8">: {{ $growth->users->name ?? 'Pasien tidak ditemukan' }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Berat Badan</div>
                    <div class="col-sm-8">: {{ $growth->weight }} kg</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Tinggi Badan</div>
                    <div class="col-sm-8">: {{ $growth->height }} cm</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Lingkar Kepala</div>
                    <div class="col-sm-8">: {{ $growth->head }} cm</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Tanggal Input</div>
                    <div class="col-sm-8">: {{ $growth->date }}</div>
                </div>
            </div>
        </div>
        @else 
            <p class="text-danger">Task not found.</p>
        @endif
        
    </x-slot>
</x-layout-admin>
