<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sekawan Media Informatika</title>
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/css/metisMenu.min.css" rel="stylesheet">
  <link href="public/css/startmin.css" rel="stylesheet">
  <link rel="stylesheet" href="public/datatables/dataTables.bootstrap.css">
  <link href="public/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<script type="text/javascript">
  var base_url = '<?php print base_url() ?>';
  var sts = '<?php print $this->uri->segment(1) ?>';
</script>

<body>

  <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="navbar-header">
        <a class="navbar-brand" href="">Sekawan Media Informatika</a>
      </div>

      <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">

            <li>
              <a href="<?php echo base_url('indexpegawai') ?>"> Master</a>
            </li>
          </ul>
        </div>
        <!-- /.sidebar-collapse -->
      </div>
      <!-- /.navbar-static-side -->
    </nav>


    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Form Pegawai</h1>
            <?= $this->session->flashdata('messagemaster'); ?>
            <form action="<?php echo base_url("pegawai/insertpegawai"); ?>" method="post">

              <div class="col-lg-5">
                <div class="form-group">
                  <label for="nama">Nama Pegawai:</label>
                  <input type="text" class="form-control" name="namapegawai">
                </div>
                <div class="form-group">
                  <label for="nama">Gaji :</label>
                  <input type="number" class="form-control" name="gaji">
                </div>
                <div class="form-group">
                  <label for="nama">Umur:</label>
                  <input type="number" class="form-control" name="Umur">
                </div>
                <div class="form-group">
                  <label for="nama">Foto :</label>
                  <input type="file" class="form-control" name="profilimage" readonly="">
                </div>
                <button type="submit" class="btn btn-primary right">Submit</button>
                <button type="button" class="btn btn-info right">Refresh</button>
              </div>
            </form>
          </div>

          <!-- /.col-lg-12 -->
        </div>
        <div class="row" style="padding-top: 20px;">
          <div class="col-lg-12">
            <?php include 'Tb_pegawai.php'; ?>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->


  <footer>

  </footer>
  <!-- jQuery -->
  <script type="text/javascript" src="public/js/jQuery/jquery-2.2.3.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script type="text/javascript" src="public/js/jquery-ui.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script type="text/javascript" src="public/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script type="text/javascript" src="public/js/metisMenu.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script type="text/javascript" src="public/js/startmin.js"></script>
  <!-- DataTables JavaScript -->
  <script type="text/javascript" src="public/datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="public/datatables/dataTables.bootstrap.min.js"></script>

  <script src="public/js/custom.js"></script>
</body>

</html>