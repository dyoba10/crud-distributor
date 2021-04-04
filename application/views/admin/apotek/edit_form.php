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
        <a href="<?php echo site_url('admin/apotek/') ?>"><i class="fas fa-plus"></i> Back</a>
        </div>
        <div class="card-body">
            <form action="<?php base_url('admin/apotek/edit') ?>" method="post" enctype="multipart/form-data">
                
            <input type="hidden" name="id" value="<?php echo $apotek->id_barang?>" />

                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
					    type="text" name="tanggal" placeholder="Tanggal" id="tanggal" value="<?php echo $apotek->tanggal ?>"/>
                    <div class="invalid-feedback">
                        <?php echo form_error('tanggal') ?>
                    </div>    
                </div>

                <div class="form-group">
                    <label for="tanggal">Expire Date</label>
                    <input class="form-control <?php echo form_error('ed') ? 'is-invalid':'' ?>"
					    type="text" name="ed" placeholder="Expired Date" id="ed" value="<?php echo $apotek->ed ?>"/>
                    <div class="invalid-feedback">
                        <?php echo form_error('ed') ?>
                    </div>    
                </div>
            
                <div class="form-group">
					<label for="price">Asal</label>
					<input class="form-control <?php echo form_error('asal') ? 'is-invalid':'' ?>"
						type="text" name="asal" placeholder="asal" value="<?php echo $apotek->asal ?>" />
					 <div class="invalid-feedback">
						<?php echo form_error('asal') ?>
				    </div> 
                </div>
                
                <div class="form-group">
					<label for="price">Jumlah Masuk</label>
					<input class="form-control <?php echo form_error('jml_masuk') ? 'is-invalid':'' ?>"
						type="text" name="jml_masuk" placeholder="Jumlah Masuk" id="txt1"  onkeyup="sum();" value="<?php echo $apotek->jml_masuk ?>"/>
					 <div class="invalid-feedback">
						<?php echo form_error('jml_masuk') ?>
				    </div> 
                </div>
                
                <div class="form-group">
					<label for="price">Jumlah Keluar</label>
					<input class="form-control <?php echo form_error('jml_keluar') ? 'is-invalid':'' ?>"
						type="text" name="jml_keluar" placeholder="Jumlah Keluar" id="txt2"  onkeyup="sum();" value="<?php echo $apotek->jml_keluar ?>"/>
					 <div class="invalid-feedback">
						<?php echo form_error('jml_keluar') ?>
				    </div> 
				</div>

                <div class="form-group">
					<label for="longitude">Sisa</label>
					<input class="form-control <?php echo form_error('sisa') ? 'is-invalid':'' ?>"
						type="text" name="sisa" placeholder="sisa" readonly="readonly" id="txt3" value="<?php echo $apotek->sisa ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('sisa') ?>
				    </div>
                </div>
                
                <div class="form-group">
					<label for="name">Keterangan</label>
						<textarea class="form-control <?php echo form_error('ket') ? 'is-invalid':'' ?>"
								 name="ket" placeholder="Keterangan" ><?php echo $apotek->ket ?></textarea>
					<div class="invalid-feedback">
						<?php echo form_error('ket') ?>
					</div>
				</div>

                <input class="btn btn-success" type="submit" name="btn" value="Save" />    
            </form>
            <script type="text/javascript">
            $(document).ready(function () {
                $('.tanggal').datepicker({
                    format: "dd-mm-yyyy",
                    autoclose:true
                });
            });
            </script>
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