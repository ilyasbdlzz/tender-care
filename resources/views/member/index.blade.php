<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Member</x-slot>
    <x-slot name="page_title">Berikut adalah Data Member :</x-slot>
    <x-slot name="page_content_admin">
  
        @if (session('pesan'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
  
        @if (session('update'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('update') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
  
        @if (session('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
  
        <a href="{{ url('member/create') }}" class="btn btn-primary">+ Tambah Member</a>
        
        <br><br>
        <table class="table table-bordered ">
            <tr class="text-white" style="background: #A375FF;">
                <th>Id </th>
                <th>Nama Member</th>
                <th>Email</th>
                <th>Nomor Handphone</th>
                <th>Aksi</th>
            </tr>
            @foreach ($members as $member)
            <tr>
                <td>{{ $member->id }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->contact }}</td>
                <td>
                  <a href="{{ route('member.show', $member->id) }}" class="btn btn-primary text-light">
                      <i class="far fa-eye"></i> Lihat
                  </a>
                  <a href="{{ url('member/edit', $member->id) }}" class="btn btn-warning text-dark">
                      <i class="far fa-edit"></i> Edit
                  </a>
                  <form action="{{ url('member/destroy', $member->id) }}" method="post" class="d-inline">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">
                          <i class="far fa-trash-alt"></i> Hapus
                      </button>
                  </form>
              </td>
            </tr>
            @endforeach
        </table>
    </x-slot>
  </x-layout-admin>
  