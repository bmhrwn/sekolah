<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
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
                                <li><span class="bread-blod">Dashboard V.1</span>
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6" style="margin-right: 16px;">
                        <button onClick="" data-toggle="modal" data-target="#modaltambah" style="float: right;position:relative;bottom:10px;" class="btn btn-outline-primary"> <i class="fa fa-calendar" style="margin-right: 4px;"></i> Atur Jadwal</button>
                    </div>
                </div>

                <div class="analytics-sparkle-area">
                    <div class="container-fuid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="analytics-sparkle-line reso-mg-b-30">
                                    <div class="analytics-content">
                                        <h5>Siswa Lulus <span style="font-size: 12px;">(Akhir)</span></h5>
                                        <h2><span>0</span> </h2>
                                        <div class="progress m-b-0" style="margin-top: 10px;">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="analytics-sparkle-line reso-mg-b-30">
                                    <div class="analytics-content">
                                        <h5>Siswa Lulus <span style="font-size: 12px;">(Dokumen)</span></h5>
                                        <h2><span><?= $lolos ?></span>
                                            <div class="progress m-b-0" style="margin-top: 10px;">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">230% Complete</span> </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                                    <div class="analytics-content">
                                        <h5>Siswa Tidak Lulus <span style="font-size: 12px;">(Dokumen)</span></h5>
                                        <h2><span><?= $tidak_lolos ?></span>
                                            <div class="progress m-b-0" style="margin-top: 10px;">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">20% Complete</span> </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                                    <div class="analytics-content">
                                        <h5>Kuota Mutasi <span style="font-size: 12px;">(Kelas 1)</span></h5>
                                        <h2><span><?= $kelas1 ?></span>
                                            <div class="progress m-b-0" style="margin-top: 10px;">
                                                <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">230% Complete</span> </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row " style="margin-top: 20px;">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 " style="margin-left: 290px;">
                                <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                                    <div class="analytics-content">
                                        <h5>Kuota Mutasi <span style="font-size: 12px;">(Kelas 2)</span></h5>
                                        <h2><span><?= $kelas2 ?></span>
                                            <div class="progress m-b-0" style="margin-top: 10px;">
                                                <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">230% Complete</span> </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                                    <div class="analytics-content">
                                        <h5>Kuota Mutasi <span style="font-size: 12px;">(Kelas 3)</span></h5>
                                        <h2><span><?= $kelas3 ?></span>
                                            <div class="progress m-b-0" style="margin-top: 10px;">
                                                <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">230% Complete</span> </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal_title">Form Jadwal Pendaftaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url() ?>jadwal/aturjadwal" id="form" method="post">
                                    <div class="form-group">
                                        <label for="">Jadwal Mulai</label>
                                        <input type="date" placeholder="Masukkan Jadwal Mulai" id="jadwal_mulai" name="jadwal_mulai" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jadwal Selesai</label>
                                        <input type="date" placeholder="Masukkan Jadwal Selesai" id="jadwal_selesai" name="jadwal_selesai" class="form-control">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" id="button" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>