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
              <h1 class="m-0"></h1>
            </div>
            <div class="col-sm-6">
            </div>
          </div>
        </div>
      </div>
      <section class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title ">TAMBAH DATA</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn btn-primary" data-card-widget="collapse"><i class="fas fa-minus alert-default-light"></i></button>
              </div>
            </div>
            <div class="card-body">
              <form action="{{route('simpan-pegawai')}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">NAMA PEGAWAI</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" id="name" name="name" class="form-control select2" style="width: 100%" placeholder="Nama Pegawai" selected="selected">
                        </input>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">NID</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" id="NID" name="NID" class="form-control select2" style="width: 100%" placeholder="NID">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">LOKASI</label>
                      <div class="input-group">
                        <input type="text" id="NID" name="lokasi" class="form-control select2" style="width: 100%" placeholder="Lokasi">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Pendidikan Terakhir</label>
                      <div class="input-group">
                        <input type="text" id="NID" name="pendidikan" class="form-control select2" style="width: 100%" placeholder="Pendidikan">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Tempat Lahir</label>
                      <div class="input-group">
                        <input type="text" id="NID" name="tempat_lahir" class="form-control select2" style="width: 100%" placeholder="Tempat Lahir">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Tanggal Bekerja</label>
                      <div class="input-group">
                        <input type="date" id="NID" name="tgl_bekerja" class="form-control select2" style="width: 100%" placeholder="Tanggal Bekerja">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <div class="input-group">
                        <input type="text" id="NID" name="alamat" class="form-control select2" style="width: 100%" placeholder="Alamat">
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">EMAIL</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="email" id="email" name="email" class="form-control select2" style="width: 100%" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">ROLE</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" id="level" name="level" class="form-control select2" style="width: 100%" placeholder="ROLE">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">JABATAN</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <select class="form-control select2" name="id_jabatan" style="width: 100%;">
                          <option value="disabled">Pilih Jabatan</option>
                          @foreach ($dtjbt as $dt )
                          <option value="{{$dt->id_jabatan}}">{{$dt->nama_jabatan}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">Bidang</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <select class="form-control select2" name="id_bidang" style="width: 100%;">
                          <option value="disabled">Pilih Bidang</option>
                          @foreach ($dtbidang as $dtb )
                          <option value="{{$dtb->id_bidang}}">{{$dtb->nama_bidang}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">TANGGAL LAHIR</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control select2" style="width: 100%" placeholder="Tanggal Lahir">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>JENIS KELAMIN</label>
                      <select class="form-control select2 select2-danger" id="jenis_kelamin" name="jenis_kelamin" data-dropdown-css-class="select2-danger" style="width: 100%">
                        <option selected disabled>Pilih jenis Kelamin</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">AGAMA</label>
                      <select class="form-control select2 select2-danger" id="agama" name="agama" data-dropdown-css-class="select2-danger" style="width: 100%">
                        <option selected disabled>Pilih Agama</option>
                        <option>ISLAM</option>
                        <option>KRISTEN PROTESTAN</option>
                        <option>KATOLIK</option>
                        <option>BUDDHA</option>
                        <option>HINDU</option>
                        <option>KONG HU CU</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">KATA SANDI</label>
                      <input type="password" id="password" name="password" class="form-control select2" style="width: 100%" placeholder="Kata Sandi">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Simpan</butoon>
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