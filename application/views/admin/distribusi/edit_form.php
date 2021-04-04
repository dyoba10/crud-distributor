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
            <form action="<?php base_url('admin/distribusi/edit') ?>" method="post" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $distribusi->kd_distribusi?>" />
            
                <div class="form-group">
					<label for="kd_distribusi">Kode Distribusi</label>
					<input class="form-control <?php echo form_error('kd_distribusi') ? 'is-invalid':'' ?>"
						type="text" name="kd_distribusi" placeholder="Kode Distribusi" readonly="readonly" value="<?php echo $distribusi->kd_distribusi ?>" />
					 <div class="invalid-feedback">
						<?php echo form_error('kd_distribusi') ?>
				    </div> 
                </div>
                
                <div class="form-group">
                    <label for="id_pegawai">ID Pegawai</label>
					<select class="form-control" id="select" name="id_pegawai">
                            <option value='<?php echo $distribusi->id_pegawai; ?>'><?php echo $distribusi->id_pegawai; ?></option>
                            <?php foreach($idpegawai as $row):?>
                        <option value="<?php echo $row->id_pegawai;?>"><?php echo $row->id_pegawai;?></option>
                        <?php endforeach;?>
                     </select>
				    </div> 
                </div>

                <div class="form-group">
                    <label for="kd_barang">Kode Barang</label>
					<select class="form-control" id="select" name="kd_barang">
                            <option value='<?php echo $distribusi->kd_barang; ?>'><?php echo $distribusi->kd_barang; ?></option>
                            <?php foreach($kodebarang as $row):?>
                        <option value="<?php echo $row->kd_barang;?>"><?php echo $row->kd_barang;?></option>
                        <?php endforeach;?>
                     </select>
				    </div> 
                </div>
                
                <div class="form-group">
					<label for="name">Jumlah</label>
						<input class="form-control <?php echo form_error('jumlah') ? 'is-invalid':'' ?>"
								 name="jumlah" placeholder="Jumlah" value="<?php echo $distribusi->jumlah ?>" />
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
  <?php $this->load->view('admin/_partials/modal.php') ?>

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