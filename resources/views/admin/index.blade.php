<x-layout>
    <x-slot name="page_name">Halaman Tugas</x-slot>
    <x-slot name="page_title">Berikut adalah data tugas :</x-slot>
    <x-slot name="page_content">
  
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
  
        <a href="{{ url('create') }}" class="btn btn-primary">+ Tambah Tugas</a>
        
        <br><br>
        <table class="table table-bordered">
            <tr style="background: #D19B9B;">
                <th>Id</th>
                <th>Mata Kuliah</th>
                <th>Dosen</th>
                <th>Deadline</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
            @foreach ($list_tugas as $tugas)
            <tr>
                <td>{{ $tugas->id_user }}</td>
                <td>{{ $tugas->matkul }}</td>
                <td>{{ $tugas->dosen }}</td>
                <td>{{ $tugas->deadline }}</td>
                <td>{{ $tugas->deskripsi }}</td>
                  <td><a href="{{ route('admin.show', $tugas->id) }}" class="btn btn-primary text-light"> <i class="far fa-eye"></i> Lihat </a> 
                    <button type="submit" class="btn btn-warning">
                        <a href="{{ url('/scheduleTask/edit', $tugas->id) }}" class="text-dark"><i class="far fa-edit"></i> Edit</a>
                    </button>
                    <form action="{{ url('/scheduleTask/destroy', $tugas->id) }}" method="post" class="d-inline">
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
  </x-layout>
  