@include('Template.head')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar ->
    @include('Template.navbar')
    <!-- /.navbar -->
        @include('Template.sidebar')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Pegawai</h1>
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
                        <h3>Update Data</h3>
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
                                <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" id="NID" name="NID" class="form-control" placeholder="NID">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Data</butoon>
                            </div>
                    </div>
                    <!-- /.content -->
                </div>
            </div>
            <!-- /.content-wrapper -->
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer">
                @include('Template.footer')
            </footer>
        </div>
        <!-- ./wrapper -->
        <!-- REQUIRED SCRIPTS -->
        @include('Template.scripts')
</body>

</html>