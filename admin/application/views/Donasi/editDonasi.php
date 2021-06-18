<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('layout/meta'); ?>
<title>Edit Donasi | Mariberamal</title>
<?php $this->load->view('layout/css'); ?>

<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('layout/header') ?>
    <?php $this->load->view('layout/sidebar') ?>

    <div class="content-wrapper">
        <section class="content container-fluid">
          <div class="col-md-5 col-md-offset-3">

            <?php 
                if($this->session->flashdata('message')) { 
            ?>
              <div role="alert" class="alert alert-success">
                <?php echo $this->session->flashdata('message'); ?>
              </div>
            <?php 
                } 
                
                foreach($tmpDonasi as $rows) {
            ?>
            
            <?php echo form_open_multipart('../admin/Donasi/update');?>
            <div class="chart-box">
                <h4>Update Data Donasi</h4>
                <br/>
                <div class="row">
                <input class="form-control" value="<?php echo $rows->id_donasi; ?>" name="id_donasi" id="basicInput" type="hidden" />
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Judul</label>
                      <input class="form-control" value="<?php echo $rows->nama_donasi; ?>" name="nama_donasi" id="basicInput" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Target</label>
                      <input class="form-control" value="<?php echo $rows->target_donasi; ?>" name="target_donasi" placeholder="Rp." id="maskMoney" type="number" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Perolehan</label>
                      <input class="form-control" value="<?php echo $rows->perolehan_donasi; ?>" name="perolehan_donasi" placeholder="Rp." id="maskMoney" type="number" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Batas Waktu</label>
                      <input class="form-control" value="<?php echo $rows->masa_donasi; ?>" name="masa_donasi" id="datepicker" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Deskripsi</label>
                      <input textarea class="form-control" value="<?php echo $rows->deskripsi_donasi; ?>" name="deskripsi_donasi" id="basicInput" type="text"/>
                    </fieldset>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Gambar</label><br>
                      <img style="width: 150px; height: 150px;" src="<?php echo base_url('assets/'.$rows->img1); ?>" />
                      <input class="form-control-file" value="<?php echo $rows->img1; ?>" name="img1" id="basicInput" type="file" required/>
                      <input type="hidden" name="old_image" value="<?php echo('assets/'.$rows->img1); ?>">
                    </fieldset>
                  </div>
                </div>
                </div>
        
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <button type="submit" name="insert" class="btn btn-primary">Submit</button>
                    </fieldset>
                  </div>
                </div>
                </div>
                <<?php echo form_close();?>
                <?php } ?>
          </div>
        </section>

        
    </div> 

    <?php $this->load->view('layout/footer'); ?>
</div>

<?php $this->load->view('layout/js'); ?>
<script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery-maskmoney/dist/jquery.maskMoney.min.js'); ?>"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#maskMoney').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precission:0});
    });
</script>
<script>
		$('#datepicker').datepicker({
			format: 'yyyy-mm-dd',
			startDate: '+1d',
			todayHighlight: true
		});
	</script>

</body>
</html>