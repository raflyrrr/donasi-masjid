<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('layout/meta'); ?>
    <title>Data Donasi | Mariberamal</title>
    <?php $this->load->view('layout/css'); ?>

<body class="sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('layout/header') ?>
        <?php $this->load->view('layout/sidebar') ?>

        <div class="content-wrapper">
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="chart-box">
                            <h4>Data Donasi</h4>

                            <div class="table-responsive m-top-2">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Target</th>
                                            <th>Perolehan Sementara</th>
                                            <th>Deskripsi</th>
                                            <th>Tanggal Buat</th>
                                            <th>Masa Habis</th>
                                            <th>Sisa Hari</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;

                                        foreach ($tmpDonasi as $rows) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $rows->nama_donasi; ?></td>
                                                <td><?php echo 'Rp.' . nominal($rows->target_donasi); ?></td>
                                                <td><?php echo 'Rp.' . nominal($rows->perolehan_donasi); ?></td>
                                                <!-- <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Klik Disini</button>
                                        <div id="demo" class="collapse">
                                        
                                        </div> -->
                                                <td><?php echo $rows->deskripsi_donasi; ?></td>
                                                <td><?php echo tgl_indo($rows->tgl_donasi); ?></td>
                                                <td><?php echo tgl_indo($rows->masa_donasi); ?></td>
                                                <td><?php echo $rows->masa_aktif; ?></td>
                                                <td><img style="width: 50px; height: 50px;" src="<?php echo base_url('assets/' . $rows->img1); ?>" /></td>
                                                <td>

                                                    <center>
                                                        <a href="<?php echo base_url('admin/Donasi/edit/' . $rows->id_donasi); ?>"><i class="fa fa-edit fa-lg"></i></a>
                                                        <span class="spasi">
                                                            <a href="<?php echo base_url('admin/Donasi/delete/' . $rows->id_donasi) ?>" onclick="return confirm(' Apakah anda yakin ingin menghapus data donasi ini ? ');"></span><i class="fa fa-trash fa-lg "></a></i>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>

        <?php $this->load->view('layout/footer'); ?>
    </div>
    <?php $this->load->view('layout/js'); ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    

</body>

</html>