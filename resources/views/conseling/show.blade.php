<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Pengajuan Konseling / Show</x-slot>
    <x-slot name="page_title">Detail Pengajuan Konseling</x-slot>
    
    <x-slot name="page_content_admin">
        @if($conseling !== null)
        <div class="card">
            <div class="card-header text-white" style="background: #A375FF;">
                <h4>View Kelola Pengajuan Konseling</h4>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Nama Pasien</div>
                    <div class="col-sm-8">: {{ $conseling->iduser }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Nama Tenaga Medis</div>
                    <div class="col-sm-8">: {{ $conseling->medis_id }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Tanggal Konseling</div>
                    <div class="col-sm-8">: {{ $conseling->date }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Jam Konseling</div>
                    <div class="col-sm-8">: {{ $conseling->clock }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Status</div>
                    <div class="col-sm-8">: {{ $conseling->status }}</div>
                </div>
            </div>
        </div>
        @else 
            <p class="text-danger">Task not found.</p>
        @endif
        
    </x-slot>
</x-layout-admin>
