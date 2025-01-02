<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Kelola Member / Edit</x-slot>
    <x-slot name="page_title">Silakan Perbarui Data Member :</x-slot>

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
                <h4>Edit Kelola Member Anda</h4>
            </div>
            <div class="card-body">

                <form class="forms-sample" action="{{ url('/member/update', $member->id) }}" method="post">
                    @csrf
                    @method('put')
                                    <input type="hidden" class="form-control" id="idmedis" name="idmedis" placeholder="Masukkan Id" value="{{ $member->id ?? '' }}">

                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">Nama Member</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Tenaga Medis" value="{{ $member->name ?? '' }}">
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email" value="{{ $member->email ?? '' }}">
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <label for="contact" class="col-sm-4 col-form-label">Nomor Handphone</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="contact" name="contact" placeholder="Masukkan Nomor Handphone" value="{{ $member->contact ?? '' }}">
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
