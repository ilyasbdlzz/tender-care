<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Tambah Member</x-slot>
    <x-slot name="page_title"></x-slot>
    <x-slot name="page_content_admin">
        <div class="card">
            <div class="card-header text-white" style="background: #A375FF;">
                <h4>Form Tambah Member</h4>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('member.store') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Nama Member</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Member">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact" class="col-sm-4 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="contact" name="contact" placeholder="Masukkan Nomor Handphone">
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