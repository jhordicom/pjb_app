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
                            <ol class="breadcrumb float-sm-right">
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-header">
                    <h3>EDIT DATA PPK</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('update-pelatihan', $peg->id_pelatihan)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">JUDUL PROGRAM</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" id="nama_pelatihan" name="nama_pelatihan" class="form-control select2" style="width: 100%" placeholder="Judul Program" selected="selected" value="{{$peg->nama_pelatihan}}">
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">TANGGAL MULAI</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="date" id="tgl_mulai" name="tgl_mulai" class="form-control select2" style="width: 100%" placeholder="Awal Pelaksanaan" selected="selected">
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">TANGGAL SELESAI</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="date" id="tgl_selesai" name="tgl_selesai" class="form-control select2" style="width: 100%" placeholder="Akhir Pelaksanaan" selected="selected">
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">UBAH</button>
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
        @include('sweetalert::alert')
    </div>
</body>


</html>