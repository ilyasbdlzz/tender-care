<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Kelola Tenaga Medis / Edit</x-slot>
    <x-slot name="page_title">Silakan Perbarui Data Tenaga Medis dengan Teliti :</x-slot>

    <x-slot name="page_content_admin">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="card">
            <div class="card-header text-white" style="background: #A375FF;">
                <h4>Edit Kelola Tenaga Medis Anda</h4>
            </div>
            <div class="card-body">

                <form class="forms-sample" action="{{ url('/medic/update', $medis->idmedis) }}" method="post">
                    @csrf
                    @method('put')

                            <div class="form-group row">
                                <label for="idmedis" class="col-sm-4 col-form-label">NIP</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="idmedis" name="idmedis" placeholder="Masukkan NIP" value="{{ $medis->idmedis ?? '' }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">Nama Tenaga Medis</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Tenaga Medis" value="{{ $medis->name ?? '' }}">
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <label for="spesialisasi" class="col-sm-4 col-form-label">Spesialisasi</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="spesialisasi" name="spesialisasi" placeholder="Masukkan Spesialisasi" value="{{ $medis->spesialisasi ?? '' }}">
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <label for="contact" class="col-sm-4 col-form-label">Nomor Handphone</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="contact" name="contact" placeholder="Masukkan Nomor Handphone" value="{{ $medis->contact ?? '' }}">
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout-admin>
