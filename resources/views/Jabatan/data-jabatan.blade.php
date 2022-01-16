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
                            <h1 class="m-0">Data Jabatan</h1>
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        @if (auth()->user()->level!='user')
                        <a href="{{route('export-jabatan')}}" class="btn btn-success">Export</a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Import</button>
                        @endif
                        <div class="card-tools">
                            @if (auth()->user()->level=='super user')
                            <a href="{{route('create-jabatan')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table myTable table-bordered" id="myTable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Jabatan</th>
                                    @if (auth()->user()->level=='super user')
                                    <th>Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dtjabatan as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->nama_jabatan}}</td>
                                    @if (auth()->user()->level=='super user')
                                    <td>
                                        <a href=" {{route('edit-jabatan',$item->id_jabatan)}}"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('delete-jabatan',$item->id_jabatan)}}"><i class="fas fa-trash-alt" style="color: red"></i></a>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="post" action="{{route('import-jabatan')}}" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                        </div>
                        <div class="modal-body">

                            @csrf

                            <label>Pilih file excel yang akan diupload</label>
                            <div class="form-group">
                                <input type="file" name="file" required="required">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Impor</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @include('Template.footer')
        @include('Template.scripts')
        @include('sweetalert::alert')

</body>


</html>