<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('layout/meta'); ?>
    <title>Detail Donasi - Mariberamal</title>
    <?php $this->load->view('layout/css'); ?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
</head>

<body>

    <?php $this->load->view('layout/header'); ?>

    <!--main-->

    <div class="container-fluid"style="margin-bottom: 8%;">
        <?php
        foreach ($donasi as $row) {
        ?>
            <div class="col-md-12 text-center mt-inner">
                <h1 class="elip font-bold" style="margin-bottom: 30px"><?php echo $row->nama_donasi; ?></h1>

                <div class="col-md-6" style="padding: 50px">

                    <div class="row">
                        <div class="col-md-11 text-left">
                            <img src="<?php echo base_url('assets/' . $row->img1); ?>" height="80%" width="100%" class="detailimage" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-detail">
                    <h3 class="eclip text-left">Terkumpul : <b><?php echo 'Rp ' . nominal($row->perolehan_donasi); ?></b></h3>
                    <h3 class="eclip text-left">Target : <b> <?php echo 'Rp ' . nominal($row->target_donasi); ?></b></h3>
                    <h3 class="eclip text-left">Berakhir Tanggal : <b> <?php echo tgl_indo($row->masa_donasi); ?></b></h3>
                    <h3 class="eclip text-left">Tersisa : <b> <?php echo $row->masa_aktif; ?> Hari</b></h3>
                    <br>
                    <h4 class="eclip text-left"><?php echo $row->deskripsi_donasi; ?></h4>
                    <hr>
                    <a href="<?php echo base_url('/Donatur/register/' . $row->id_donasi); ?>" class="btn btn-success btn-lg btn-block" role="button"><span style="color: white;">Donasi sekarang</span></a>
                </div>
            <?php } ?>
            </div>
    </div>
    </div>

    <div class="container-fluid">
        <?php $this->load->view('layout/footer'); ?>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

    <script>
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '+1d',
            todayHighlight: true
        });
    </script>

    <?php $this->load->view('layout/js'); ?>
</body>

</html>