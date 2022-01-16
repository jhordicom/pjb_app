@include('Template.head')
@include('Template.navbar')
@include('Template.sidebar')

<body class="hold-transition sidebar-mini">
    <div class="card-footer p-0">
        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
        <div class="float-right">
            1-50/200
            <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Pegawai</h1>
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

                    </div>
                </div>
                <div class="card-body">
                    <table class="table myTable table-bordered">
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div>
        <aside class="control-sidebar control-sidebar-dark">

            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        @include('Template.footer')

    </div>
    @include('Template.scripts')
    @include('sweetalert::alert')
</body>

</html>