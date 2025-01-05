<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Tambah Tenaga Medis</x-slot>
    <x-slot name="page_title"></x-slot>
    <x-slot name="page_content_admin">
        <div class="card">
            <div class="card-header text-white" style="background: #A375FF;">
                <h4>Form Tambah Tenaga Medis</h4>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ secure_url('medic.store') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="idmedis" class="col-sm-4 col-form-label">NIP</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="idmedis" name="idmedis" placeholder="Masukkan NIP">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="iduser" class="col-sm-4 col-form-label">Nama Tenaga Medis</label>
                        <div class="col-sm-8">
                            <select id="iduser" name="iduser" class="form-control">
                                <option value="">Pilih Nama Tenaga Medis</option>
                                @if($parents->isEmpty())
                                    <option value="">Tidak ada data</option>
                                @else
                                    @foreach($parents as $parent)
                                        <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="spesialisasi" class="col-sm-4 col-form-label">Spesialisasi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="spesialisasi" name="spesialisasi" placeholder="Masukkan Spesialisasi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact" class="col-sm-4 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="contact" name="contact" placeholder="Masukkan Nomor Telephone">
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