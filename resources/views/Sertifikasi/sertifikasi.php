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
                            <h1 class="m-0 ">Data Sertifikasi</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="card card-info card-outline">
                </div>
                <div class="card-body">
                    <table id="myTable" class="table myTable table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NID</th>
                                <th>Nama Lengkap</th>
                                <th>Lokasi Unit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dtpegawai as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->NID}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->lokasi}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
    @include('Template.footer')
    @include('Template.scripts')
    @include('sweetalert::alert')
    </div>

</body>

</html>