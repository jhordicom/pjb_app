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
                            <h1 class="m-0 ">Data Bidang</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <div class="card-tools">
                            @if (auth()->user()->level=='super user')
                            <a href="{{route('create-bidang')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table myTable table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="w-1/6">No</th>
                                    <th class="w-2/6">Nama Bidang</th>
                                    @if (auth()->user()->level=='super user')
                                    <th class="w-6/6">Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dtbidang as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->nama_bidang}}</td>
                                    @if (auth()->user()->level=='super user')
                                    <td>
                                        <a href="{{route('edit-bidang',$item->id_bidang)}}"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('delete-bidang',$item->id_bidang)}}"><i class="fas fa-trash-alt" style="color: red"></i></a>
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