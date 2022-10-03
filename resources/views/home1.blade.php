<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data SKRK - IMB</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("plugins/fontawesome-free/css/all.min.css")}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
  <link rel="stylesheet" href="{{asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
  <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}">
  <link rel="stylesheet" href="{{asset("plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css")}}">
  <link rel="stylesheet" href="{{asset("plugins/toastr/toastr.min.css")}}">
  <link rel="stylesheet" href="{{asset("dist/css/adminlte.min.css")}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        {{-- <a href="{{asset("/")}}" class="nav-link">Home</a> --}}
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-circle"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider mt-2"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Profil
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
          <div class="dropdown-divider mb-2"></div>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset("/")}}" class="brand-link">
      <img src="{{asset("dist/img/DPRKPP-02.png")}}" alt="Logo" class="brand-image img-size-250">
      <span class="brand-text font-weight-light text-primary">DPRKPP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{asset("/")}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data SKRK - IMB</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data SKRK</li> --}}
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Semua Data SKRK - IMB</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>No UPT IMB</th>
                    <th>No IMB</th>
                    <th>No SKRK</th>
                    <th>Persil IMB</th>
                    <th>Nama Jalan</th>
                    <th>Nama Pemohon</th>
                    <th>Alamat Pemohon</th>
                    {{-- <th>Kelurahan</th> --}}
                    {{-- <th>Kecamatan</th> --}}
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {{-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> --}}

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Detail Data SKRK</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="modal-body" class="modal-body">
        <div class="row">
          <div class="col-12">
            <div id="modal-table" class="table-responsive">
              
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data SKRK</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{-- <section class="content"> --}}
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-body" id="edit-modal">

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        {{-- </section> --}}
      </div>
      <div class="modal-footer-edit justify-content-between">
        
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-sm">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Hapus Data SKRK</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Yakin Menghapus Data ?</p>
      </div>
      <div class="modal-footer-alert justify-content-between">
        
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- jQuery -->
<script src="{{asset("plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset("plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
<script src="{{asset("plugins/datatables-buttons/js/dataTables.buttons.min.js")}}"></script>
<script src="{{asset("plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}"></script>
<script src="{{asset("plugins/jszip/jszip.min.js")}}"></script>
<script src="{{asset("plugins/pdfmake/pdfmake.min.js")}}"></script>
<script src="{{asset("plugins/pdfmake/vfs_fonts.js")}}"></script>
<script src="{{asset("plugins/datatables-buttons/js/buttons.html5.min.js")}}"></script>
<script src="{{asset("plugins/datatables-buttons/js/buttons.print.min.js")}}"></script>
<script src="{{asset("plugins/datatables-buttons/js/buttons.colVis.min.js")}}"></script>
<script src="{{asset("plugins/sweetalert2/sweetalert2.min.js")}}"></script>
<script src="{{asset("plugins/toastr/toastr.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("dist/js/adminlte.min.js")}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{asset('plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Page specific script -->
<script>
	let baseUrl = "{{asset('/')}}";
	console.log(baseUrl);
  $('.toastrDefaultSuccess').click(function() {
    toastr.success('Data Di Update.')
  });
	$(document).ready(function () {
		table()
	});
  function table() {
    $('#example2').DataTable({
    "bDestroy": true,
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false,
		"responsive": true,
    "processing": true,
    "serverSide": false,
			"ajax": {
			"url": '{{ route('skrk.json') }}',
			"dataType": "json",
			"type": "GET",
			"data":{ _token: "{{csrf_token()}}"}
			},
			"columns": [
			{data: 'id_imb', name: 'id_imb'},
			{data: 'no_upt_imb'},
      {data: 'no_imb'},
      {data: 'no_skrk'},
      {data: 'persil_imb'},
      {data: 'nama_jalan'},
      {data: 'nama_pemoh'},
      {data: 'alamat_pem'},
			// {data: 'kelurahan'},
			// {data: 'kecamatan'},
			{data: 'action', orderable: false, searcable: false}
			],
		});
  }
  function show_json(id_imb){
    console.log(id_imb)
    $.ajax({
        type: "GET",
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          "Authorization":"Bearer " + localStorage.getItem("token")
        },
        url: baseUrl+"api/skrk/show_json/"+id_imb,
        success: function (response) {
          res = response;
          if (res.no_imb == null) {res.no_imb = ""}
          if (res.no_upt_imb == null) {res.no_upt_imb = ""}
          if (res.pemohon == null) {res.pemohon = ""}
          if (res.alamat_per == null) {res.alamat_per = ""}
          if (res.kelurahan == null) {res.kelurahan = ""}
          if (res.kecamatan == null) {res.kecamatan = ""}
          if (res.permohonan == null) {res.permohonan = ""}
          if (res.penggunaan == null) {res.penggunaan = ""}
          if (res.luas_st == null) {res.luas_st = ""}
          if (res.luas_ukur == null) {res.luas_ukur = ""}
          if (res.status_tan == null) {res.status_tan = ""}
          if (res.alamat_pem == null) {res.alamat_pem = ""}
          if (res.nama_jalan == null) {res.nama_jalan = ""}
          if (res.no_imb == null) {res.no_imb = ""}
          if (res.persil_imb == null) {res.persil_imb = ""}
          if (res.scan_imb == null) {res.scan_imb = ""}
          if (res.wilayah == null) {res.wilayah = ""}
          if (res.nama_pemoh == null) {res.nama_pemoh = ""}
          if (res.alamat_pem == null) {res.alamat_pem = ""}
          console.log(res);
              $('#modal-table').html(
                `
                <table class="table">
                  <tr>
                    <th>No UPT</th>
                    <td>`+res.no_upt_imb+`</td>
                  </tr>
                  <tr>
                    <th>Pemohon</th>
                    <td>`+res.pemohon+`</td>
                  </tr>
                  <tr>
                    <th>Alamat Perumahan</th>
                    <td>`+res.alamat_per+`</td>
                  </tr>
                  <tr>
                    <th>Permohonan</th>
                    <td>`+res.permohonan+`</td>
                  </tr>
                  <tr>
                    <th>Penggunaan</th>
                    <td>`+res.penggunaan+`</td>
                  </tr>
                  <tr>
                    <th>Luat St</th>
                    <td>`+res.luas_st+`</td>
                  </tr>
                  <tr>
                    <th>Luat Ukur</th>
                    <td>`+res.luas_ukur+`</td>
                  </tr>
                  <tr>
                    <th>Status Tanah</th>
                    <td>`+res.status_tan+`</td>
                  </tr>
                  <tr>
                    <th>Kelurahan</th>
                    <td>`+res.kelurahan+`</td>
                  </tr>
                  <tr>
                    <th>Kecamatan</th>
                    <td>`+res.kecamatan+`</td>
                  </tr>
                  <tr>
                    <th>Alamat Pemohon</th>
                    <td>`+res.alamat_pem+`</td>
                  </tr>
                  <tr>
                    <th>Nama Jalan</th>
                    <td>`+res.nama_jalan+`</td>
                  </tr>
                  <tr>
                    <th>No IMB</th>
                    <td>`+res.no_imb+`</td>
                  </tr>
                  <tr>
                    <th>Persil IMB</th>
                    <td>`+res.persil_imb+`</td>
                  </tr>
                  <tr>
                    <th>Scan IMB</th>
                    <td><a href="{{asset("storage/scan_imb/`+res.scan_imb+`")}}" target="_blank">`+res.scan_imb+`</a></td>
                  </tr>
                  <tr>
                    <th>Wilayah</th>
                    <td>`+res.wilayah+`</td>
                  </tr>
                  <tr>
                    <th>Nama Pemohon</th>
                    <td>`+res.nama_pemoh+`</td>
                  </tr>
                  <tr>
                    <th>Alamat Pemohon</th>
                    <td>`+res.alamat_pem+`</td>
                  </tr>
                </table>
                `
              )
              $('.modal-footer').html(
                `
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                `
              )
        }
    });
  }
  function edit_json(id_imb){
    console.log(id_imb)
    $.ajax({
        type: "GET",
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          "Authorization":"Bearer " + localStorage.getItem("token")
        },
        url: baseUrl+"api/skrk/show_json/"+id_imb,
        success: function (response) {
          res = response;
          if (res.no_upt == null) {res.no_upt = ""}
          if (res.no_upt_skrk == null) {res.no_upt_skrk = ""}
          if (res.tgl_skrk == null) {res.tgl_skrk = ""}
          if (res.pemohon == null) {res.pemohon = ""}
          if (res.alamat_per == null) {res.alamat_per = ""}
          if (res.permohonan == null) {res.permohonan = ""}
          if (res.peruntukan == null) {res.peruntukan = ""}
          if (res.kecamatan == null) {res.kecamatan = ""}
          if (res.kelurahan == null) {res.kelurahan = ""}
          if (res.no_upt_imb == null) {res.no_upt_imb = ""}
          if (res.no_imb == null) {res.no_imb = ""}
          if (res.tgl_imb == null) {res.tgl_imb = ""}
          if (res.atas_nama == null) {res.atas_nama = ""}
          if (res.nama_pemoh == null) {res.nama_pemoh = ""}
          if (res.persil_imb == null) {res.persil_imb = ""}
          if (res.pengguna_1 == null) {res.pengguna_1 = ""}
          if (res.luas_bangu == null) {res.luas_bangu = ""}
          if (res.tinggi_ban == null) {res.tinggi_ban = ""}
          if (res.jumlah_lan == null) {res.jumlah_lan = ""}
          if (res.scan_skrk == null) {res.scan_skrk = ""}
          if (res.scan_zoning == null) {res.scan_zoning = ""}
          if (res.scan_imb == null) {res.scan_imb = ""}
          if (res.scan_gamba == null) {res.scan_gamba = ""}
          console.log(res);
            $('#edit-modal').html(
              `
              <form action="`+baseUrl+`"api/skrk/store_json/"`+id_imb+`" id="input-skrk" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="emp_scan_skrk" id="emp_scan_skrk">
                <input type="hidden" name="emp_scan_imb" id="emp_scan_imb">
                <input type="hidden" name="emp_scan_zoning" id="emp_scan_zoning">
                <input type="hidden" name="emp_scan_gamba" id="emp_scan_gamba">
                <input type="hidden" name="id_imb" id="id_imb" class="form-control" value="`+res.id_imb+`">
                <div class="form-group">
                    <label for="inputProjectLeader">No UPT SKRK</label>
                    <input type="text" name="no_upt" id="no_upt" class="form-control" value="`+res.no_upt+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">No SK SKRK</label>
                    <input type="text" name="no_upt_skrk" id="no_upt_skrk" class="form-control" value="`+res.no_upt_skrk+`">
                </div>
                <div class="form-group">
                  <label>Tanggal SKRK</label>
                    <div class="input-group date" id="tgl_skrk" data-target-input="nearest">
                        <input type="text" name="tgl_skrk" value="`+res.tgl_skrk+`" class="form-control datetimepicker-input" data-target="#tgl_skrk"/>
                        <div class="input-group-append" data-target="#tgl_skrk" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Nama Pemohon SKRK</label>
                    <input type="text" name="pemohon" id="pemohon" class="form-control" value="`+res.pemohon+`">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Alamat Persil SKRK</label>
                  <textarea name="alamat" id="alamat" class="form-control" rows="4">`+res.alamat_per+`</textarea>
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Permohonan</label>
                    <input type="text" name="permohonan" id="permohonan" class="form-control" value="`+res.permohonan+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Peruntukan</label>
                    <input type="text" name="peruntukan" id="peruntukan" class="form-control" value="`+res.peruntukan+`">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">Kelurahan</label>
                    <input type="text" name="kelurahan" id="kelurahan" class="form-control" value="`+res.kelurahan+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Kecamatan</label>
                    <input type="text" name="kecamatan" id="kecamatan" class="form-control" value="`+res.kecamatan+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">No UPT IMB</label>
                    <input type="text" name="no_upt_imb" id="no_upt_imb" class="form-control" value="`+res.no_upt_imb+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">No SK IMB</label>
                    <input type="text" name="no_imb" id="no_imb" class="form-control" value="`+res.no_imb+`">
                </div>
                <div class="form-group">
                  <label>Tanggal SKRK</label>
                    <div class="input-group date" id="tgl_imb" data-target-input="nearest">
                        <input type="text" name="tgl_imb" value="`+res.tgl_imb+`" class="form-control datetimepicker-input" data-target="#tgl_imb"/>
                        <div class="input-group-append" data-target="#tgl_imb" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Atas Nama</label>
                    <input type="text" name="atas_nama" id="atas_nama" class="form-control" value="`+res.atas_nama+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Nama Pemohon IMB</label>
                    <input type="text" name="nama_pemoh" id="nama_pemoh" class="form-control" value="`+res.nama_pemoh+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Alamat Persil IMB</label>
                    <textarea name="persil_imb" id="persil_imb" class="form-control" rows="4">`+res.persil_imb+`</textarea>
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Penggunaan</label>
                    <input type="text" name="pengguna_1" id="pengguna_1" class="form-control" value="`+res.pengguna_1+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Luas Bangunan</label>
                    <input type="text" name="luas_bangu" id="luas_bangu" class="form-control" value="`+res.luas_bangu+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Tinggi Bangunan</label>
                    <input type="text" name="tinggi_ban" id="tinggi_ban" class="form-control" value="`+res.tinggi_ban+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Jumlah Lantai</label>
                    <input type="text" name="jumlah_lan" id="jumlah_lan" class="form-control" value="`+res.jumlah_lan+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">File SKRK</label>
                    <input type="file" name="scan_skrk" id="scan_skrk" class="form-control" value="`+res.scan_skrk+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">File Zoning</label>
                    <input type="file" name="scan_zoning" id="scan_zoning" class="form-control" value="`+res.scan_zoning+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">File IMB</label>
                    <input type="file" name="scan_imb" id="scan_imb" class="form-control" value="`+res.scan_imb+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">File Gambar IMB</label>
                    <input type="file" name="scan_gamba" id="scan_gamba" class="form-control" value="`+res.scan_gamba+`">
                </div>
              `
            )
            $("#emp_scan_imb").val(res.scan_imb)
            $("#emp_scan_skrk").val(res.scan_skrk)
            $("#emp_scan_zoning").val(res.scan_zoning)
            $("#emp_scan_gamba").val(res.scan_gamba)
            $('.modal-footer-edit').html(
              `
              <button type="button" class="btn btn-default ml-3" data-dismiss="modal">Close</button>
              <button type="button" onclick="store_json(`+id_imb+`)" class="btn btn-success float-right mb-3 mr-3 toastrDefaultSuccess">Save changes</button>
              </form>
              `
            )
        }
    });
  }
  function store_json(id_imb){
    var data = {
      id_imb: $("#id_imb").val(),
      no_upt_imb: $("#no_upt_imb").val(),
      kelurahan: $("#kelurahan").val(),
      kecamatan: $("#kecamatan").val(),
      no_imb: $("#no_imb").val(),
      persil_imb: $("#persil_imb").val(),
    }
    const fd = new FormData(document.getElementById('input-skrk'));
    console.log(data)
    $.ajax({
        type: "POST",
        processData: false, 
        contentType: false,
        dataType: "json",
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          "Authorization":"Bearer " + localStorage.getItem("token")
        },
        data: fd,
        url: baseUrl+"api/skrk/store_json/"+id_imb,
        success: function (response) {
          $('#modal-lg').modal('hide')
          table()
        }
    });
  }
  function alert(id_imb) {
    $('.modal-footer-alert').html(
      `
        <button type="button" class="btn btn-default ml-3" data-dismiss="modal">Close</button>
        <button type="button" onclick="delete_json(`+id_imb+`)" class="btn btn-danger float-right mb-3 mr-3">Hapus</button>
      `
    )
  }
  function delete_json(id_imb){
    $('#modal-sm').modal('hide')
    console.log(id_imb)
    alert('delete');
    $.ajax({
        type: "DELETE",
        dataType: "json",
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          "Authorization":"Bearer " + localStorage.getItem("token")
        },
        url: baseUrl+"api/skrk/delete_json/"+id_imb,
        success: function (response) {
          table()
        }
    });
  }
</script>
</body>
</html>
