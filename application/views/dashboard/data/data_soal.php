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
                                            <li><a href="<?= base_url() ?>">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Data Soal</span>
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
                                <div class="main-sparkline13-hd">
                                <button onClick="add_soal('<?= base_url() ?>soal/add_soal')" data-toggle="modal" data-target="#modaltambah" style="float: right;position:relative;bottom:10px;" class="btn btn-primary">Tambah Data</button>
                                    <h1><span class="table-project-n">Data</span> Soal</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="false" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="id"><center>No</center></th>
                                                <th data-field="name"><center>Soal</center></th>
                                                <th data-field="email"><center>Kelas</center></th>
                                                <th data-field="action"><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1; foreach($data_soal as $row) { ?>
                                            <tr>
                                                <td><center> <?= $i++; ?> </center></td>
                                                <td><span class="badge badge-success"><a target="_blank" href="<?= base_url() ?>assets/soal/<?= $row['soal'] ?>">Lihat Soal</a> </span></td>
                                                <td><?= $row['nama_kelas']?></td>
                                                <td>
                                                <center>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Edit Data">
                                                        <button onClick="update_soal('<?= base_url() ?>soal/update_soal','<?= $row['id_kelas'] ?>','<?= $row['soal'] ?>','<?= $row['id_soal'] ?>')" data-toggle="modal" data-target="#modaltambah" type="button" class="btn btn-primary btn-circle btn-icon">
                                                            <i class="fa fa-info"></i></button>
                                                    </span>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                                        <button onClick="" data-toggle="modal" data-target="#modal_delete" type="button" class="btn btn-danger btn-circle btn-icon">
                                                            <i class="fa fa-trash"></i></button>
                                                    </span>
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

        
<!-- Modal -->
<div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>  
            <div class="modal-body">
                <form action="" id="form" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="id_soal" name="id_soal" class="form-control">
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <select class="form-control" name="nama_kelas" id="nama_kelas">
                            <option value="">--Pilih Kelas--</option>
                            <?php foreach ($data_kelas as $kelas) { ?>
                                <option value="<?= $kelas['id_kelas'] ?>"><?= $kelas['nama_kelas'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formFile" class="col-sm-3 col-form-label">Upload Soal</label>
                            <input class="form-control" required type="file" name="soal" id="formFile">
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

<script>
function add_soal(base_url){
    document.getElementById('modal_title').innerHTML = "Form Tambah Soal";
    document.getElementById('button').innerHTML = "Tambah Data";
    document.getElementById('form').action = base_url;
}

</script>

<script>
function update_soal(base_url,nama_kelas,soal,id_soal){
    document.getElementById('modal_title').innerHTML ="Form Update Soal"
    document.getElementById('nama_kelas').value = nama_kelas;
    document.getElementById('soal').innerHTML = soal;
    document.getElementById('id_soal').value = id_soal;
    document.getElementById('button').action = base_url;
}
</script>