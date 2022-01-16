@include('Template.head')
@include('Template.navbar')
@include('Template.sidebar')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">TAMBAH DATA PPK</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('simpan-sertifikasi')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">JUDUL PROGRAM</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" id="nama" name="nama" class="form-control select2" style="width: 100%" placeholder="Judul Program" selected="selected">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">TANGGAL MULAI</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="datetime" id="masa_berlaku" name="masa_berlaku" class="form-control select2" style="width: 100%" placeholder="Tanggal Berlaku" selected="selected">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">TANGGAL SELESAI</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="datetime" id="tglberlaku" name="tglberlaku" class="form-control select2" style="width: 100%" placeholder="Tanggal Berakhir" selected="selected">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('Template.footer')
    @include('Template.scripts')
    </div>
</body>

</html>