<?php include_once('../authen.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>add_patient Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6-md-2">
            <h1>เพิ่มข้อมูลผู้ป่วย</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">หน้าหลัก</a></li>
              <li class="breadcrumb-item"><a href="../add_patient">ข้อมูลผู้ป่วย</a></li>
              <li class="breadcrumb-item active">เพิ่มข้อมูลผู้ป่วย</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">เพิ่มข้อมูลผู้ป่วย</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
          <form role="form" action="create.php" method="post">
            <div class="card-body">
            <form role="form" action="create.php" method="post">
              <div class="card-body">
              <div class ="row">
                  <div class = "col-md-2">
                    <div class="form-group">
                    <label for="firstName">hn</label>
                      <input type="text" class="form-control" id="hn" placeholder="hn">
                    </div>
                  </div>
                  <div class = "col-md-2">
                    <div class="form-group">
                    <label for="pname">คำนำหน้า</label>
                      <input type="text" class="form-control" id="pname" placeholder="pname">
                    </div>
                  </div>
          
                  <div class = "col-md-4">
                    <div class="form-group">
                    <label for="firstName">ชื่อ</label>
                      <input type="text" class="form-control" id="firstName" placeholder="FirstName">
                    </div>
                  </div>
                  <div class = "col-md-4">
                    <div class="form-group">
                    <label for="lastName">นามสกุล</label>
                      <input type="text" class="form-control" id="lastName" placeholder="LastName">
                    </div>
                  </div>
                <div class ="row">
                  <div class = "col-md-2">
                    <div class="form-group">
                    <label for="cid">หมายเลขบัตรประชาชน</label>
                      <input type="text" class="form-control" id="cid" placeholder="cid">
                    </div>
                  </div>
                  <div class = "col-md-1">
                    <div class="form-group">
                    <label for="address">เลขที่</label>
                      <input type="text" class="form-control" id="address" placeholder="เลขที่">
                    </div>
                  </div>
                <div class = "col-md-1">
                    <div class="form-group">
                    <label for="address">หมู่ที่</label>
                      <input type="text" class="form-control" id="address" placeholder="หมุ่ที่">
                    </div>
                </div>
                <div class = "col-md-2">
                    <div class="form-group">
                    <label for="address">ตำบล</label>
                      <input type="text" class="form-control" id="address" placeholder="ตำบล">
                    </div>
                  </div>
                <div class = "col-md-2">
                    <div class="form-group">
                    <label for="address">อำเภอ</label>
                      <input type="text" class="form-control" id="address" placeholder="อำเภอ">
                    </div>
                </div>
                <div class = "col-md-2">
                    <div class="form-group">
                    <label for="address">จังหวัด</label>
                      <input type="text" class="form-control" id="address" placeholder="จังหวัด">
                    </div>
              </div>
              <div class = "col-md-2">
                    <div class="form-group">
                    <label for="address">รหัสไปรษณีย์</label>
                      <input type="text" class="form-control" id="address" placeholder="รหัสไปรษณีย์">
                    </div>
              </div>
              <div class = "col-md-3">
                    <div class="form-group">
                    <label for="tel">เบอร์โทรศัพท์</label>
                      <input type="text" class="form-control" id="tel" placeholder="tel">
                    </div>
              </div>
              <div class = "col-md-3">
                    <div class="form-group">
                    <label for="tel">lat</label>
                      <input type="text" class="form-control" id="tel" placeholder="tel">
                    </div>
                </div>
              <div class = "col-md-3">
                    <div class="form-group">
                    <label for="tel">long</label>
                      <input type="text" class="form-control" id="tel" placeholder="tel">
                    </div>
              </div>  
              <div class = "col-md-3">
                    <div class="form-group">
                    <label for="tel">lat</label>
                      <input type="text" class="form-control" id="tel" placeholder="tel">
                    </div>
              </div>
              <div class="form-group">
                <label>ลงผลวินิจฉัย</label>
                  <select class="form-control select2" multiple="multiple"data-placeholder="Select a Tags" style="width: 100%;">
                      <option value="DH+">DH+</option>
                      <option value="DH">DH</option>
                      <option value="TB+">TB+</option>
                      <option value="TB">TB</option>
                  </select>
              </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">บันทึก</button>
            </div>
          </form>
      </div>    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include_once('../includes/footer.php') ?>
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- CK Editor -->
<script src="../../plugins/ckeditor/ckeditor.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>

<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });

    $('.custom-file-input').on('change', function(){
        var fileName = $(this).val().split('\\').pop()
        $(this).siblings('.custom-file-label').html(fileName)
        if (this.files[0]) {
            var reader = new FileReader()
            $('.figure').addClass('d-block')
            reader.onload = function (e) {
                $('#imgUpload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0])
        }
    })

    ClassicEditor
      .create(document.querySelector('#detail'))
      .then(function (editor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })

    //Initialize Select2 Elements
    $('.select2').select2()

  });
  
</script>

</body>
</html>
