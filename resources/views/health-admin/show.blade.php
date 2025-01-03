<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Health Record / Show</x-slot>
    <x-slot name="page_title">Detail Health Record</x-slot>
    
    <x-slot name="page_content_admin">
        @if($health !== null)
        <div class="card">
            <div class="card-header text-white" style="background: #A375FF;">
                <h4>View Health Record</h4>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Nama Pasien</div>
                    <div class="col-sm-8">: {{ $health->users->name ?? 'Pasien tidak ditemukan' }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Obat-Obatan</div>
                    <div class="col-sm-8">: {{ $health->drug }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Alergi</div>
                    <div class="col-sm-8">: {{ $health->allergy }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Tanggal Berobat</div>
                    <div class="col-sm-8">: {{ $health->date }}</div>
                </div>
            </div>
        </div>
        @else 
            <p class="text-danger">Data not found.</p>
        @endif
        
    </x-slot>
</x-layout-admin>
