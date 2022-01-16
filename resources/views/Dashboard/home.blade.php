@include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('Template.sidebar')
        @include('Template.navbar')
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <link rel="stylesheet" href="halaman.css')}}">
                    <image width="1100px" controls>
                        <img src="{{asset('gambar/organisasi.png')}}" type="img/png">
                    </image>
                </div>
                <ol class="breadcrumb float-sm-right">
                </ol>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="container-fluid">
            <div class="row">
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