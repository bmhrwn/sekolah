<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Data Normalisasi</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd" style="display: flex;margin-left:19px;margin-right:19px;">
                            <h1 style="margin-right: auto;"><span class="table-project-n">Data</span> Normalisasi</h1>
                            <a href="<?= base_url() ?>dashboard/hitungnormalisasi" class="btn btn-outline-primary">Hitung Normalisasi</a>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div class="sparkline13-graph">
                                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                                    <ul id="myTabedu1" class="tab-review-design">
                                        <li class="active"><a href="#kelas1">Kelas 1</a></li>
                                        <li class=""><a href="#kelas2">Kelas 2</a></li>
                                        <li class=""><a href="#kelas3">Kelas 3</a></li>
                                    </ul>

                                    <div id="myTabContent" class="tab-content custom-product-edit">
                                        <div class="product-tab-list tab-pane fade active in" id="kelas1">
                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="false" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="id">
                                                                <center>No</center>
                                                            </th>
                                                            <th data-field="full_name">
                                                                <center>Nama Siswa</center>
                                                            </th>
                                                            <th data-field="jenis_kelamin">
                                                                <center>Nilai Matematika</center>
                                                            </th>
                                                            <th data-field="jadwal">
                                                                <center>Nilai B.Indonesia</center>
                                                            </th>
                                                            <th data-field="alamat">
                                                                <center>Nilai B.Inggris</center>
                                                            </th>
                                                            <th data-field="wawancara">
                                                                <center>Nilai Wawancara</center>
                                                            </th>
                                                            <th data-field="test">
                                                                <center>Nilai Tes</center>
                                                            </th>
                                                            <th data-field="total">
                                                                <center>Total Nilai</center>
                                                            </th>
                                                            <th data-field="status">
                                                                <center>Status</center>
                                                            </th>
                                                            <th data-field="action">
                                                                <center>Action</center>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1;
                                                              $j = 1;
                                                        $kuoataKelas1 = $kelas1;
                                                        
                                                        foreach ($data_normalisasi_1 as $row) { ?>
                                                            <tr>
                                                                <td>
                                                                    <center><?= $i++; ?></center>
                                                                </td>
                                                                <td>
                                                                    <center><?= $row['full_name'] ?></center>
                                                                </td>
                                                                <td>
                                                                    <center><?= $row['nilai_mtk'] ?></center>
                                                                </td>
                                                                <td>
                                                                    <center><?= $row['nilai_bindo'] ?> </center>
                                                                </td>
                                                                <td>
                                                                    <center><?= $row['nilai_bingg'] ?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <center><?= $row['nilai_wawancara'] ?></center>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <?= $row['nilai_tes'] ?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <?= $row['total_nilai'] ?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    
                                                                    <?php if ($j++ <= $kuoataKelas1) { ?>
                                                                        <?php $status = 1; ?>
                                                                        <span class="badge badge-primary">Lulus</span>
                                                                    <?php } else { ?>
                                                                        <?php $status = 0; ?>
                                                                        <span class="badge badge-warning">Tidak Lulus</span>
                                                                    <?php } ?>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Lihat Detail Siswa">
                                                                            <button onClick="getDetail('<?= $row['nis'] ?>','<?= $row['full_name'] ?>','<?= $row['jenis_kelamin'] ?>','<?= $row['nama_orangtua'] ?>','<?= $row['tgl_lahir'] ?>','<?= $row['alamat'] ?>')" data-toggle="modal" data-target="#modaldetail" type="button" class="btn btn-outline-purple btn-circle btn-icon btn-sm">
                                                                                <i class="fa fa-user"></i></button>
                                                                        </span>
                                                                        <?php if ($row['status'] == 0) { ?>
                                                                            <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Konfirmasi Kelulusan">
                                                                                <button onClick="confirmPendaftaran('<?= base_url() ?>','<?= $row['id_pendaftaran'] ?>','<?= $status ?>')" data-toggle="modal" data-target="#modalConfirm" type="button" class="btn btn-outline-success btn-circle btn-icon btn-sm">
                                                                                    <i class="fa fa-check"></i></button>
                                                                            </span>
                                                                        <?php } ?>
                                                                    </center>
                                                                </td>

                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="product-tab-list tab-pane fade" id="kelas2">
                                            <!-- kelas 2 -->
                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="false" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="id">
                                                                <center>No</center>
                                                            </th>
                                                            <th data-field="full_name">
                                                                <center>Nama Siswa</center>
                                                            </th>
                                                            <th data-field="jenis_kelamin">
                                                                <center>Nilai Matematika</center>
                                                            </th>
                                                            <th data-field="jadwal">
                                                                <center>Nilai B.Indonesia</center>
                                                            </th>
                                                            <th data-field="alamat">
                                                                <center>Nilai B.Inggris</center>
                                                            </th>
                                                            <th data-field="wawancara">
                                                                <center>Nilai Wawancara</center>
                                                            </th>
                                                            <th data-field="text">
                                                                <center>Nilai Tes</center>
                                                            </th>
                                                            <th data-field="total">
                                                                <center>Total Nilai</center>
                                                            </th>
                                                            <th data-field="status">
                                                                <center>status</center>
                                                            </th>
                                                            <th data-field="action">
                                                                <center>Action</center>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1;
                                                              $j = 1;
                                                        $kuoataKelas2 = $kelas2;
                                                        foreach ($data_normalisasi_2 as $row) { ?>
                                                            <tr>
                                                                <td>
                                                                    <center><?= $i++; ?></center>
                                                                </td>
                                                                <td>
                                                                    <center><?= $row['full_name'] ?></center>
                                                                </td>
                                                                <td>
                                                                    <center><?= $row['nilai_mtk'] ?></center>
                                                                </td>
                                                                <td>
                                                                    <center><?= $row['nilai_bindo'] ?> </center>
                                                                </td>
                                                                <td>
                                                                    <center><?= $row['nilai_bingg'] ?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <center><?= $row['nilai_wawancara'] ?></center>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <?= $row['nilai_tes'] ?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <?= $row['total_nilai'] ?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <?php if ($j++ <= $kuoataKelas2) { ?>
                                                                        <?php $status = 1; ?>
                                                                        <span class="badge badge-primary">Lulus</span>
                                                                    <?php } else { ?>
                                                                        <?php $status = 0; ?>
                                                                        <span class="badge badge-warning">Tidak Lulus</span>
                                                                    <?php } ?>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Lihat Detail Siswa">
                                                                            <button onClick="getDetail('<?= $row['nis'] ?>','<?= $row['full_name'] ?>','<?= $row['jenis_kelamin'] ?>','<?= $row['nama_orangtua'] ?>','<?= $row['tgl_lahir'] ?>','<?= $row['alamat'] ?>')" data-toggle="modal" data-target="#modaldetail" type="button" class="btn btn-outline-purple btn-circle btn-icon btn-sm">
                                                                                <i class="fa fa-user"></i></button>
                                                                        </span>
                                                                        <?php if ($row['status'] == 0) { ?>
                                                                            <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Konfirmasi Kelulusan">
                                                                                <button onClick="confirmPendaftaran('<?= base_url() ?>','<?= $row['id_pendaftaran'] ?>','<?= $status ?>')" data-toggle="modal" data-target="#modalConfirm" type="button" class="btn btn-outline-success btn-circle btn-icon btn-sm">
                                                                                    <i class="fa fa-check"></i></button>
                                                                            </span>
                                                                        <?php } ?>
                                                                    </center>
                                                                </td>

                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="product-tab-list tab-pane fade" id="kelas3">
                                            <!-- kelas 3 -->
                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="false" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="id">
                                                                <center>No</center>
                                                            </th>
                                                            <th data-field="full_name">
                                                                <center>Nama Siswa</center>
                                                            </th>
                                                            <th data-field="jenis_kelamin">
                                                                <center>Nilai Matematika</center>
                                                            </th>
                                                            <th data-field="jadwal">
                                                                <center>Nilai B.Indonesia</center>
                                                            </th>
                                                            <th data-field="alamat">
                                                                <center>Nilai B.Inggris</center>
                                                            </th>
                                                            <th data-field="wawancara">
                                                                <center>Nilai Wawancara</center>
                                                            </th>
                                                            <th data-field="test">
                                                                <center>Nilai Tes</center>
                                                            </th>
                                                            <th data-field="total">
                                                                <center>Total Nilai</center>
                                                            </th>
                                                            <th data-field="status">
                                                                <center>Status</center>
                                                            </th>
                                                            <th data-field="action">
                                                                <center>Action</center>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1;
                                                              $j = 1;
                                                        $kuoataKelas3 = $kelas3;
                                                        foreach ($data_normalisasi_3 as $row) { ?>
                                                            <tr>
                                                                <td>
                                                                    <center><?= $i++; ?></center>
                                                                </td>
                                                                <td>
                                                                    <center><?= $row['full_name'] ?></center>
                                                                </td>
                                                                <td>
                                                                    <center><?= $row['nilai_mtk'] ?></center>
                                                                </td>
                                                                <td>
                                                                    <center><?= $row['nilai_bindo'] ?> </center>
                                                                </td>
                                                                <td>
                                                                    <center><?= $row['nilai_bingg'] ?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <center><?= $row['nilai_wawancara'] ?></center>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <?= $row['nilai_tes'] ?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <?= $row['total_nilai'] ?>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <?php if ($j++ <= $kuoataKelas3) { ?>
                                                                        <?php $status = 1; ?>
                                                                        <span class="badge badge-primary">Lulus</span>
                                                                    <?php } else { ?>
                                                                        <?php $status = 0; ?>
                                                                        <span class="badge badge-warning">Tidak Lulus</span>
                                                                    <?php } ?>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Lihat Detail Siswa">
                                                                            <button onClick="getDetail('<?= $row['nis'] ?>','<?= $row['full_name'] ?>','<?= $row['jenis_kelamin'] ?>','<?= $row['nama_orangtua'] ?>','<?= $row['tgl_lahir'] ?>','<?= $row['alamat'] ?>')" data-toggle="modal" data-target="#modaldetail" type="button" class="btn btn-outline-purple btn-circle btn-icon btn-sm">
                                                                                <i class="fa fa-user"></i></button>
                                                                        </span>
                                                                        <?php if ($row['status'] == 0) { ?>
                                                                            <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Konfirmasi Kelulusan">
                                                                                <button onClick="confirmPendaftaran('<?= base_url() ?>','<?= $row['id_pendaftaran'] ?>','<?= $status ?>')" data-toggle="modal" data-target="#modalConfirm" type="button" class="btn btn-outline-success btn-circle btn-icon btn-sm">
                                                                                    <i class="fa fa-check"></i></button>
                                                                            </span>
                                                                        <?php } ?>
                                                                    </center>
                                                                </td>

                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalConfirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modal_title">Konfirmasi Kelulusan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <!-- <span aria-hidden="true">&times;</span> -->
                            </button>
                        </div>
                        <div class="modal-body">
                            <h4>Anda yakin ingin mengkonfirmasi kelulusan siswa tersebut?`</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="button" data-dismiss="modal" class="btn btn-default">Keluar</button>
                            <a type="submit" id="btn_confirm" class="btn btn-primary">Konfirmasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modaldetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modal_title">Detail Data Siswa</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <!-- <span aria-hidden="true">&times;</span> -->
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid mt-4" style="margin-top:20px;margin-bottom:20px;">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <img style="width: 250px;heigth:auto;" src="<?= base_url() ?>assets/admin/user.png" class="btn-circle" alt="">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-lg-4"><span>NISN</span></div>
                                            <div class="col-lg-8"> : <span class="font-bold" id="nisn"></span></div>
                                        </div>
                                        <div class="row mt-6">
                                            <div class="col-lg-4"><span>Nama Lengkap</span></div>
                                            <div class="col-lg-8"> : <span class="font-bold" id="nama"></span></div>
                                        </div>
                                        <div class="row mt-6">
                                            <div class="col-lg-4"><span>Nama Orangtua</span></div>
                                            <div class="col-lg-8"> : <span class="font-bold" id="orangtua"></span></div>
                                        </div>
                                        <div class="row mt-6">
                                            <div class="col-lg-4"><span>Jenis Kelamin</span></div>
                                            <div class="col-lg-8"> : <span class="font-bold" id="jk"></span></div>
                                        </div>
                                        <div class="row mt-6">
                                            <div class="col-lg-4"><span>Tanggal Lahir</span></div>
                                            <div class="col-lg-8"> : <span class="font-bold" id="tgl_lahir"></span></div>
                                        </div>
                                        <div class="row mt-6">
                                            <div class="col-lg-4"><span>Alamat</span></div>
                                            <div class="col-lg-8"> : <span class="font-bold" id="alamat"></span></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="button" data-dismiss="modal" class="btn btn-primary">Keluar</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function getDetail(nis, fullName, jk, ortu, tglLahir, alamat) {
                    document.getElementById("nisn").innerHTML = nis
                    document.getElementById("nama").innerHTML = fullName
                    document.getElementById("jk").innerHTML = jk
                    document.getElementById("orangtua").innerHTML = ortu
                    document.getElementById("tgl_lahir").innerHTML = tglLahir
                    document.getElementById("alamat").innerHTML = alamat
                }

                function confirmPendaftaran(base_url, id_pendaftaran, status) {
                    document.getElementById("btn_confirm").href = base_url + 'hasil/confirmKelulusan/' + id_pendaftaran + '/' + status;
                }
            </script>