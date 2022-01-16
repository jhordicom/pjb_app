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
                            <ol class="breadcrumb float-sm-right">
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card">
                    <div class="card-header">
                        <h3>Edit Data Bidang</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update-bidang', $peg->id_bidang)}}" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" id="nama_bidang" name="nama_bidang" class="form-control select2" style="width: 100%" placeholder="Nama Bidang" selected="selected" value="{{$peg->nama_bidang}}">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Ubah Data</button>
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
        @include('sweetalert::alert')
    </div>
</body>


</html>