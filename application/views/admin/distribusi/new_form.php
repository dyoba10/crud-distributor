<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body id="page-top">

    <?php $this->load->view('admin/_partials/nav.php') ?>

  <div id="wrapper">

    <?php $this->load->view('admin/_partials/sidebar.php') ?>

    <div id="content-wrapper">

      <div class="container-fluid">

      <?php $this->load->view('admin/_partials/breadcrumb.php') ?>

      <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
	  <?php endif; ?>

      <!-- DataTables -->
      <div class="card mb-3">
        <div class="card-header">
        <a href="<?php echo site_url('admin/distribusi/') ?>"><i class="fas fa-plus"></i> Back</a>
        </div>
        <div class="card-body">
            <form action="<?php base_url('admin/distribusi/add') ?>" method="post" enctype="multipart/form-data">
            
                <div class="form-group">
					<label for="kd_Distribusi">Kode Distribusi</label>
					<input class="form-control <?php echo form_error('kd_distribusi') ? 'is-invalid':'' ?>"
						type="text" name="kd_distribusi" placeholder="Kode Distribusi" />
					 <div class="invalid-feedback">
						<?php echo form_error('kd_Distribusi') ?>
				    </div> 
                </div>

                <div class="form-group">
                    <label for="id_pegawai">ID Pegawai</label>
					<select class="form-control" id="select" name="id_pegawai">
                            <option value=''>Pilih ID Pegawai</option>
                            <?php foreach($idpegawai as $row):?>
                        <option value="<?php echo $row->id_pegawai;?>"><?php echo $row->id_pegawai;?></option>
                        <?php endforeach;?>
                     </select>
				    </div> 
                </div>

                <div class="form-group">
                    <label for="kd_barang">Kode Barang</label>
					<select class="form-control" id="select" name="kd_barang">
                            <option value=''>Pilih Kode Barang</option>
                            <?php foreach($kodebarang as $row):?>
                        <option value="<?php echo $row->kd_barang;?>"><?php echo $row->kd_barang;?></option>
                        <?php endforeach;?>
                     </select>
				    </div> 
                </div>

                <div class="form-group">
					<label for="jumlah">Jumlah Barang</label>
					<input class="form-control <?php echo form_error('jumlah') ? 'is-invalid':'' ?>"
						type="text" name="jumlah" placeholder="Jumlah Barang" />
					 <div class="invalid-feedback">
						<?php echo form_error('jumlah') ?>
				    </div> 
                </div>

                <input class="btn btn-success" type="submit" name="btn" value="Save" />    
            </form>
           
        </div>
      </div>  

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Apotek Adisa 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url('assets/chart.js/Chart.min.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('js/sb-admin.min.js')?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url('js/demo/datatables-demo.js')?>"></script>
  <script src="<?php echo base_url('js/demo/chart-area-demo.js')?>"></script>

  <script src="<?php echo base_url('js/bootstrap-datepicker.js')?>"></script>
    <script>
    function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
      }
    }
    </script>

    <script>
    $('#tanggal').datepicker({
		format: 'yyyy-mm-dd',
		daysOfWeekDisabled: "0",
		autoclose:true
    });
    </script>
    <script>
    $('#ed').datepicker({
		format: 'yyyy-mm-dd',
		daysOfWeekDisabled: "0",
		autoclose:true
    });
    </script>
</body>

</html>