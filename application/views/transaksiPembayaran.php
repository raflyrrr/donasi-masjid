<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('layout/meta'); ?>
    <title>Pembayaran - Mariberamal</title>
    <?php $this->load->view('layout/css'); ?>
</head>

<body>

    <?php $this->load->view('layout/header'); ?>

    <div class="back-banner box-shadow-bt">
        <div class="title-all">
            <h2 class="font-white">Pembayaran Tiket</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="section" style="margin-bottom: 28%;">
            <div class="mt-inner">
                <div class="card-transaksi" role="alert">
                    <a>Terima kasih atas donasinya <?php foreach ($tmpTransaksi as $rowname) { ?>
                            <b><?php echo $rowname->nama_donatur; ?></b>
                    </a><?php
                                                    }
                        ?>
                </div>
                <div class="row">
                    <div class="col-md-7 transaksi">
                        <h4>Untuk pembayaran silahkan dapat transfer di rekening dibawah ini : </h4>
                        <div class="image">
                            <img src="../assets/front/images/BSI Logo.svg" alt="" width="150px" height="80px">
                        </div>
                        <div class="col-md-4 labelimage">
                            <h4>Bank Syariah Indonesia</h4>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="container">
                                <?php
                                foreach ($tmpTransaksi as $rows) {
                                ?>
                                    <p><b>Nama : <?php echo $rows->nama_donatur; ?></p>
                                    <p>Kode Transaksi : <?php echo $rows->kode_transaksi; ?></p>
                                    <p>Nominal Donasi : <?php echo 'Rp.' . nominal($rows->jumlah_donasi); ?></b></p>
                                    <a href="https://api.whatsapp.com/send?phone=6289653455762&text=Assalamualaikum%2C%20saya%20ingin%20mengkonfirmasi%20pembayaran%20dengan%20Nama%3A%20<?php echo $rows->nama_donatur; ?>%2C%20Kode Transaksi%3A%20<?php echo $rows->kode_transaksi; ?>%2C%20Nominal Donasi%3A%20<?php echo 'Rp.' . nominal($rows->jumlah_donasi); ?>" class="btn btn-success btn-md" role="button" style="margin-top: 20px;"><span style="color:white;"><i class="fa fa-whatsapp"></i> Konfirmasi Pembayaran</span></a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 imgtext">
                        <h4>No. Rekening 012345-123-123-123 atas nama Mariberamal</h4>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->load->view('layout/footer'); ?>

    </div>

    <?php $this->load->view('layout/js'); ?>
    <script type="text/javascript" src="<?php echo base_url('assets/front/js/simple.money.format.js'); ?>"></script>
    <script>
        $('.format').simpleMoneyFormat();
    </script>
</body>

</html>