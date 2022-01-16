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
                            <h1 class="m-0">Data Divisi</h1>
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
                        <h3>Input Data</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('simpan-divisi')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" id="nama-divisi" name="nama_divisi" class="form-control" placeholder="Nama Divisi">
                            </div>
                            <div class="form-group">
                                <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai">
                            </div>
                            <div class="form-group">
                                <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="Jabatan">
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="string" id="NID" name="NID" class="form-control" placeholder="NID">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Data</butoon>
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