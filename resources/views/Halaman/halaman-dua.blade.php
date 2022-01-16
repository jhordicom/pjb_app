@include('Template.head')
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
          <h1 class="m-0">Data Sertifikasi</h1>
        </div>
      </div>
    </div>
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
<footer class="main-footer">
  @include('Template.footer')
</footer>
</div>
@include('Template.scripts')
</body>

</html>