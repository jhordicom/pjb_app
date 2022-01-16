@include('Template.head')


<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include('Template.navbar')
    @include('Template.sidebar')
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Data Pegawai</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="card card-info card-outline">
          <div class="card-header">
            <h3></h3>
          </div>
          <div class="card-body">
            <form action="{{route('update-pegawai', $peg->id)}}" method="post">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">NAMA PEGAWAI</label>
                    <input type="text" id="name" name="name" class="form-control select2" style="width: 100%" placeholder="Nama Pegawai" selected="selected" value="{{$peg->name}}">
                    </input>
                  </div>
                  <div class="form-group">
                    <label for="">NID</label>
                    <input type="text" id="NID" name="NID" class="form-control select2" style="width: 100%" placeholder="NID" value="{{$peg->NID}}">
                  </div>
                  <div class="form-group">
                    <label for="">LOKASI</label>
                    <div class="input-group">
                      <input type="text" id="NID" name="lokasi" class="form-control select2" style="width: 100%" placeholder="Lokasi" value="{{$peg->lokasi}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <div class="input-group">
                      <input type="text" id="NID" name="pendidikan" class="form-control select2" style="width: 100%" placeholder="Pendidikan" value="{{$peg->pendidikan}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <div class="input-group">
                      <input type="text" id="NID" name="tempat_lahir" class="form-control select2" style="width: 100%" placeholder="Tempat Lahir" value="{{$peg->tempat_lahir}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Bekerja</label>
                    <div class="input-group">
                      <input type="date" id="NID" name="tgl_bekerja" class="form-control select2" style="width: 100%" placeholder="Tanggal Bekerja" value="{{$peg->tgl_bekerja}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <div class="input-group">
                      <input type="text" id="NID" name="alamat" class="form-control select2" style="width: 100%" placeholder="Alamat" value="{{$peg->alamat}}">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-group">
                      <label for="">EMAIL</label>
                      <input type="email" id="email" name="email" class="form-control select2" style="width: 100%" placeholder="Email" value="{{$peg->email}}">
                    </div>
                    <div class="form-group">
                      <label for="">ROLE</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" id="level" name="level" class="form-control select2" style="width: 100%" placeholder="ROLE" value="{{$peg->level}}">
                      </div>
                    </div>
                    <label for="">JABATAN</label>
                    <select class="form-control select2" name="id_jabatan" style="width: 100%;" value="{{$peg->id_jabatan}}">
                      <option value="disabled">Pilih Jabatan</option>
                      @foreach ($dtjbt as $dt )
                      <option value="{{$dt->id_jabatan}}">{{$dt->nama_jabatan}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Bidang</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                      <select class="form-control select2" name="id_bidang" style="width: 100%;" value="{{$peg->id_bidang}}">
                        <option value="disabled">Pilih Bidang</option>
                        @foreach ($dtbidang as $dtb )
                        <option value="{{$dtb->id_bidang}}">{{$dtb->nama_bidang}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">TANGGAL LAHIR</label>
                    <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control select2" style="width: 100%" placeholder="Tanggal Lahir" value="{{$peg->tgl_lahir}}">
                  </div>
                  <div class="form-group">
                    <label>JENIS KELAMIN</label>
                    <select class="form-control select2 select2-danger" id="jenis_kelamin" name="jenis_kelamin" data-dropdown-css-class="select2-danger" style="width: 100%" value="{{$peg->jenis_kelamin}}">
                      <option selected disabled>Pilih jenis Kelamin</option>
                      <option>Laki-laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">AGAMA</label>
                    <input type="text" class="form-control select2 select2-danger" id="agama" name="agama" data-dropdown-css-class="select2-danger" style="width: 100%" value="{{$peg->agama}}">
                    <!-- <option selected disabled>Pilih Agama</option>
                      <option>ISLAM</option>
                      <option>KRISTEN PROTESTAN</option>
                      <option>KATOLIK</option>
                      <option>BUDDHA</option>
                      <option>HINDU</option>
                      <option>KONG HU CU</option> -->
                    </input>
                  </div>
                  <div class="form-group">
                    <label for="">KATA SANDI</label>
                    <input type="password" id="password" name="password" class="form-control select2" style="width: 100%" placeholder="Kata Sandi" value="{{$peg->password}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ubah</butoon>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <aside class="control-sidebar control-sidebar-dark">
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    @include('Template.footer')
    @include('Template.scripts')
  </div>

</body>

</html>