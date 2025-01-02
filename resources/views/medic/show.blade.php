<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Tenaga Medis / Show</x-slot>
    <x-slot name="page_title">Detail Tenaga Medis</x-slot>
    
    <x-slot name="page_content_admin">
        @if($medis !== null)
        <div class="card">
            <div class="card-header text-white" style="background: #A375FF;">
                <h4>View Kelola Tenaga Medis</h4>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">NIP</div>
                    <div class="col-sm-8">: {{ $medis->idmedis }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Nama Tenaga Medis</div>
                    <div class="col-sm-8">: {{ $medis->name }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Spesialisasi</div>
                    <div class="col-sm-8">: {{ $medis->spesialisasi }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Nomor Handphone</div>
                    <div class="col-sm-8">: {{ $medis->contact }}</div>
                </div>
            </div>
        </div>
        @else 
            <p class="text-danger">Task not found.</p>
        @endif
        
    </x-slot>
</x-layout-admin>