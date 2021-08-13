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
                                <li><span class="bread-blod">Data Laporan</span>
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
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n">Data Laporan</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#grafik">Grafik</a></li>
                                <li class=""><a href="#kelas1">Kelas 1</a></li>
                                <li class=""><a href="#kelas2">Kelas 2</a></li>
                                <li class=""><a href="#kelas3">Kelas 3</a></li>
                            </ul>

                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="grafik">
                                    <!-- <div>
                                        <canvas id="myChart" width="1039"height="300"></canvas>
                                    </div> -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col" style="margin-right: auto;"></div>
                                            <div class="col" style="float: right;">
                                                <button data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-primary"><i class="fa fa-filter"></i> Filter</button>
                                            </div>
                                        </div>
                                        <h3 class="text-center"><?= $title_grafik ?></h3>
                                        <div class="chart-pie pt-4 pb-2" style="margin-top:30px;">
                                            <canvas id="myPieChart" height="80"></canvas>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-tab-list tab-pane fade " id="kelas1">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="id">
                                                    <center>No</center>
                                                </th>
                                                <th data-field="nisn">
                                                    <center>NISN</center>
                                                </th>
                                                <th data-field="name">
                                                    <center>Nama Lengkap</center>
                                                </th>
                                                <th data-field="kelas">
                                                    <center>Kelas Tujuan</center>
                                                </th>
                                                <th data-field="ortu">
                                                    <center>Jenis Kelamin</center>
                                                </th>
                                                <th data-field="email">
                                                    <center>Status</center>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($data_kelas1 as $kelas1) { ?>
                                                <tr>
                                                    <td>
                                                        <center><?= $i++; ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $kelas1['nis'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $kelas1['full_name'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $kelas1['nama_kelas'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $kelas1['jenis_kelamin'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <?php if ($kelas1['status'] == 1) { ?>
                                                                <span class="badge badge-primary">Lolos</span>
                                                            <?php } else { ?>
                                                            <?php } ?>
                                                        </center>
                                                    </td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="kelas2">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="id">
                                                    <center>No</center>
                                                </th>
                                                <th data-field="nisn">
                                                    <center>NISN</center>
                                                </th>
                                                <th data-field="name">
                                                    <center>Nama Lengkap</center>
                                                </th>
                                                <th data-field="kelas">
                                                    <center>Kelas Tujuan</center>
                                                </th>
                                                <th data-field="ortu">
                                                    <center>Jenis Kelamin</center>
                                                </th>
                                                <th data-field="email">
                                                    <center>Status</center>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($data_kelas2 as $kelas2) { ?>
                                                <tr>
                                                    <td>
                                                        <center><?= $i++; ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $kelas2['nis'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $kelas2['full_name'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $kelas2['nama_kelas'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $kelas2['jenis_kelamin'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <?php if ($kelas2['status'] == 1) { ?>
                                                                <span class="badge badge-primary">Lolos</span>
                                                            <?php } else { ?>
                                                            <?php } ?>
                                                        </center>
                                                    </td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="kelas3">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="id">
                                                    <center>No</center>
                                                </th>
                                                <th data-field="nisn">
                                                    <center>NISN</center>
                                                </th>
                                                <th data-field="name">
                                                    <center>Nama Lengkap</center>
                                                </th>
                                                <th data-field="kelas">
                                                    <center>Kelas Tujuan</center>
                                                </th>
                                                <th data-field="ortu">
                                                    <center>Jenis Kelamin</center>
                                                </th>
                                                <th data-field="email">
                                                    <center>Status</center>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($data_kelas3 as $kelas3) { ?>
                                                <tr>
                                                    <td>
                                                        <center><?= $i++; ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $kelas3['nis'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $kelas3['full_name'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $kelas3['nama_kelas'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $kelas3['jenis_kelamin'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <?php if ($kelas2['status'] == 1) { ?>
                                                                <span class="badge badge-primary">Lolos</span>
                                                            <?php } else { ?>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter Semester dan Tahun Kelulusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body " style="padding:30px;">
                <form action="" method="post">
                    <div class="form-group row">
                        <label for="" class="col-2">Semester</label>
                        <div class="col-10">
                            <select type="text" name="semester" class="form-control">
                                <option value="">-- Pilih Semester --</option>
                                <option value="Ganjil">Ganjil</option>
                                <option value="Genap">Genap</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-2">Tahun</label>
                        <div class="col-10">
                            <input id="datepicker" autocomplete="off" type="text" name="tahun" class="form-control">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Lihat Data</button>
                </form>
            </div>
        </div>
    </div>
</div>