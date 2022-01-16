@include('Template.head')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Divisi</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="{{route('create-divisi')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>

                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama Divisi</th>
                                <th>Nama Pegawai</th>
                                <th>Jabatan</th>
                                <th>Email</th>
                                <th>NID</th>
                                <th>Aksi</th>

                            </tr>
                            @foreach ($dtdivisi as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nama_divisi}}</td>
                                <td>{{$item->nama_pegawai}}</td>
                                <td>{{$item->jabatan}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->NID}}</td>
                                <td>
                                    <a href="{{route('edit-divisi',$item->id)}}"><i class="fas fa-edit"></i></a>
                                    |
                                    <a href="{{route('delete-divisi',$item->id)}}"><i class="fas fa-trash-alt" style="color: red"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->


            </div>
        </div>

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

        @include('Template.footer')

        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        @include('Template.scripts')
        @include('sweetalert::alert')

</body>


</html>