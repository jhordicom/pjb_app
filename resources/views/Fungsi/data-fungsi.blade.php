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
                            <h1 class="m-0 ">Data Fungsi</h1>
                        </div>
                        <div class="col-sm-3">
                            <form action="/data-fungsi" method="GET">
                                <div class="input-group custom-search-form">
                                    <input type="search" name="search" class="form-control" placeholder="search....">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="{{route('create-fungsi')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table myTable table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama Fungsi</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($dtfungsi as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nama_fungsi}}</td>
                                <td>
                                    <a href="{{route('edit-fungsi',$item->id_fungsi)}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('delete-fungsi',$item->id_fungsi)}}"><i class="fas fa-trash-alt" style="color: red"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
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