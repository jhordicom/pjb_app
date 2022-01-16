@include('Template.head')

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include('Template.navbar')
    @include('Template.sidebar')
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-9">
              <h1 class="m-0 ">Data Pegawai</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="card card-info card-outline">
          <div class="card-header">
            @if (auth()->user()->level!='user')
            <a href="{{route('export-user')}}" class="btn btn-success">Export</a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Import</button>
            @endif
            <div class="card-tools">
              @if (auth()->user()->level=='super user')
              <a href="{{route('create-pegawai')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
              @endif
            </div>
          </div>
          <div class="card-body">
            <table id="myTable" class="table myTable table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NID</th>
                  <th>Nama Lengkap</th>
                  <th>Lokasi Unit</th>
                  <th>Email</th>
                  <th>Tempat Lahir</th>
                  <th>Agama</th>
                  <th>Alamat</th>
                  <th>Jenis Kelamin</th>
                  <th>Pendidikan</th>
                  <th>Role</th>
                  @if (auth()->user()->level=='super user')
                  <th>Aksi</th>
                  @endif
                </tr>
              </thead>
              <tbody>
                @foreach ($dtpegawai as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->NID}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->lokasi}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->tempat_lahir}}</td>
                  <td>{{$item->agama}}</td>
                  <td>{{$item->alamat}}</td>
                  <td>{{$item->jenis_kelamin}}</td>
                  <td>{{$item->pendidikan}}</td>
                  <td>{{$item->level}}</td>
                  @if (auth()->user()->level=='super user')
                  <td>
                    <a href="{{route('edit-pegawai',$item->id)}}"><i class="fas fa-edit"></i></a>
                    <a href="{{route('delete-pegawai',$item->id)}}"><i class="fas fa-trash-alt" style="color: red"></i></a>
                  </td>
                  @endif
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>



      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <form method="post" action="{{route('import-user')}}" enctype="multipart/form-data">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Impor Data</h5>
              </div>
              <div class="modal-body">

                @csrf

                <label>Pilih file excel</label>
                <div class="form-group">
                  <input type="file" name="file" required="required">
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Import</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    @include('Template.footer')
    @include('Template.scripts')
    @include('sweetalert::alert')

</body>


</html>