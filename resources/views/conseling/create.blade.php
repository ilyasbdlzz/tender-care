<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Tambah Pengajuan Konseling</x-slot>
    <x-slot name="page_title"></x-slot>
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
                <h4>Form Tambah Pengajuan Konseling</h4>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('conseling.store') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="iduser" class="col-sm-4 col-form-label">Nama Pasien</label>
                        <div class="col-sm-8">
                            <select id="iduser" name="iduser" class="form-control">
                                <option value="">Pilih Nama Pasien</option>
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
                        <label for="medis_id" class="col-sm-4 col-form-label">Nama Tenaga Medis</label>
                        <div class="col-sm-8">
                            <select id="medis_id" name="medis_id" class="form-control">
                                <option value="">Pilih Nama Tenaga Medis</option>
                                @if($conselings->isEmpty())
                                    <option value="">Tidak ada data</option>
                                @else
                                    @foreach($conselings as $conseling)
                                        <option value="{{ $conseling->idmedis }}">{{ $conseling->users->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="date" class="col-sm-4 col-form-label">Tanggal Konseling</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="date" name="date" placeholder="Masukkan Tanggal Konseling">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="clock" class="col-sm-4 col-form-label">Jam Konseling</label>
                        <div class="col-sm-8">
                            <input type="time" class="form-control" id="clock" name="clock" placeholder="Masukkan Jam Konseling">
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