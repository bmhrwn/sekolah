<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1 class="white-color">Pendaftaran Siswa</h1>
                <ul class="breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Pendaftaran</li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="section-padding">
    <div class="container">
        <div class="data-1" id="data_1">
            <div class="row">
                <center
                    <h4>Silahkan isi halaman form pendaftaran sesuai ketentuan yang ada.</h4>
                </center>
                <div class="col-md-6">
                    <form action="<?= base_url() ?>pendaftaran/process_pendaftaran" novalidate method="post" enctype="multipart/form-data">
                        <div class="form-group row mt-4">
                            <label for="" class="col-sm-3 col-form-label">NISN</label>
                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" autocorrect="false" value="" id="nis" required name="nis" onkeyup="checkNis(this)" onkeypress='validate(event)' class="form-control">
                                <p style="color: red;
                                " hidden="true" id="notif">Silahkan masukan nis yang benar ! (10 digit)</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text"   value="" id="" required name="full_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" value="" onchange="checkDate(this)" id="tgl_lahir" required name="tgl_lahir" class="form-control">
                                <p id="notif_tanggal" hidden="true" style="color: red;">Mohon Maaf umur anda belum mencukupi untuk melakukan pendaftaran mutasi</p>
                                <p id="notif_tanggal_max" hidden="true" style="color: red;">Mohon Maaf umur anda melewati batas maksimal pendaftaran mutasi.</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Nama Orang Tua</label>
                            <div class="col-sm-9">
                                <input type="text" value="" id="" required name="nama_orangtua" class="form-control">
                            </div>
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-9">
                            <input type="text" value="" id="" required name="no_telp" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <select type="text" required name="jenis_kelamin" class="form-control">
                                <option value="">--Pilih Jenis Kelamin--</option>
                                <option value="Laki - Laki">Laki - Laki</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Kota</label>
                        <div class="col-sm-9">
                            <input type="text" value="" id="kota" required name="kota" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" value="" id="" required name="alamat" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-block">
                <center>
                    <button id="btnData_1" onClick="nextPage(1)" class="btn btn-primary" type="button">Selanjutnya</button>
                </center>
            </div>
        </div>
        <div class="data-2" hidden="true" id="data_2">
            <div class="row">
                <center>
                    <h4>Silahkan isi halaman form pendaftaran sesuai ketentuan yang ada.</h4>
                </center>
                <div class="col-md-6 mt-4">

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Kelas Tujuan</label>
                        <div class="col-sm-9">
                            <select type="text" required name="nama_kelas" class="form-control">
                              <?php  if($dipilih != null) { ?>
                                <option value="<?= $dipilih['id_kelas'] ?>"><?= $dipilih['nama_kelas'] ?></option>
                                <?php }else{ ?>
                                <option value="1">--Pilih Kelas--</option>
                                <?php foreach ($data_kelas as $kelas) { ?>
                                    <option value="<?= $kelas['id_kelas'] ?>"><?= $kelas['nama_kelas'] ?></option>
                                <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Nilai Ijazah Matematika</label>
                        <div class="col-sm-9">
                            <input type="number" value="" id="" required name="nilai_mtk" class="form-control">
                        </div>
                    </div>


                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Nilai Ijazah B.Indonesia</label>
                        <div class="col-sm-9">
                            <input type="number" value="" id="" required name="nilai_bindo" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Nilai Ijazah B.Inggris</label>
                        <div class="col-sm-9">
                            <input type="number" value="" id="" required name="nilai_bingg" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-block">
                <center>
                    <button class="btn btn-outline-danger" onClick="back(2)" type="button">Kembali</button>
                    <button onClick="nextPage(2)" class="btn btn-primary" type="button">Selanjutnya</button>
                </center>
            </div>
        </div>
        <div class="data-3" hidden="true" id="data_3">
            <div class="row">
                <center>
                    <h4>Silahkan isi halaman form pendaftaran sesuai ketentuan yang ada.</h4>
                </center>
                <div class="col-md-6 mt-4">
                    <div class="form-group row">
                        <label for="formFile" class="col-sm-3 col-form-label">Foto NISN</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="file" required name="bukti_nis" id="formFile">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="formFile" class="col-sm-3 col-form-label">Foto Siswa</label>
                        <div class="col-sm-9">
                            <input class="form-control" required type="file" name="profil" id="formFile">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="formFile" class="col-sm-3 col-form-label">Akte Kelahiran</label>
                        <div class="col-sm-9">
                            <input class="form-control" required type="file" name="akte" id="formFile">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="formFile" class="col-sm-3 col-form-label">Kartu Keluarga</label>
                        <div class="col-sm-9">
                            <input class="form-control" required type="file" name="kartu_keluarga" id="formFile">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="formFile" class="col-sm-3 col-form-label">Ijazah</label>
                        <div class="col-sm-9">
                            <input class="form-control" required type="file" name="ijazah" id="formFile">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Semester</label>
                        <div class="col-sm-9">
                            <select type="text" required name="semester" class="form-control">
                                <option value="2">--Semester--</option>
                                
                                    <option value="Ganjil">Ganjil</option>
                                    <option value="Genap">Genap</option>
                               
                            </select>
                        </div>
                    </div>



                </div>
            </div>
            <div class="d-grid gap-2 d-md-block">
                <center>
                    <button class="btn btn-outline-danger" onClick="back(3)" type="button">Kembali</button>
                    <?php
                    $dateNow = date('Y-m-d');
                    $jadwalMulai = $jadwal_pendaftaran['jadwal_mulai'];
                    $jadwalSelesai = $jadwal_pendaftaran['jadwal_selesai'];
                    $rangeMulai = GetDatesFromRange($dateNow, $jadwalMulai);
                    $rangeSelesai = GetDatesFromRange($dateNow, $jadwalSelesai);
                    ?>
                    <?php if (count($rangeMulai) <= 1) { ?>
                        <?php if (count($rangeSelesai) <= 1) { ?>
                            <button class="btn btn-primary" id="btn_daftar" onclick="notifSudahSelesai()" type="button">Daftar</button>
                            <?php } else { ?>
                            <button class="btn btn-primary" id="btn_dafta" type="submit">Daftar</button>
                        <?php } ?>
                    <?php } else { ?>

                        <button class="btn btn-primary" id="btn_daftar" onclick="notifBelumMulai()" type="button">Daftar</button>
                    <?php } ?>
                </center>
            </div>
        </div>
        </form>
    </div>
</div>
<!-- <p hidden="true" id="jadwal_mulai"><?= $jadwal_pendaftaran['jadwal_mulai'] ?></p>
<p hidden="true" id="jadwal_selesai"><?= $jadwal_pendaftaran['jadwal_selesai'] ?></p> -->

<script>
    function nextPage(page) {
        if (page == 1) {
            document.getElementById('data_1').hidden = true;
            document.getElementById('data_2').hidden = false;
            document.getElementById('data_3').hidden = true;
        } else if (page == 2) {
            document.getElementById('data_1').hidden = true;
            document.getElementById('data_2').hidden = true;
            document.getElementById('data_3').hidden = false;
        }
    }

    function validate(evt) {
        var theEvent = evt || window.event;

        // Handle paste
        if (theEvent.type === 'paste') {
            key = event.clipboardData.getData('text/plain');
        } else {
        // Handle key press
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
        }
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }

    function checkNis(field) {
        let nis = field.value;
        console.log(nis.length);
        if (nis.length > 10 || nis.length < 10) {
            document.getElementById("notif").hidden = false;
            $("#btn_daftar").attr('disabled', 'disabled');
        } else {
            document.getElementById("notif").hidden = true;
            $("#btn_daftar").removeAttr('disabled');
        }
    }
    setMax()
    
    function setMax(){
        document.getElementsByName("nis")[0].setAttribute("maxLength", "10");

    }

    function notifBelumMulai() {
        swal({
            title: "Mohon Maaf",
            text: "Anda belum bisa mendaftar dikarenakan pendaftaran siswa mutasi belum dimulai !",
            icon: "info",
        })
    }

    function notifSudahSelesai(){
        swal({
            title: "Mohon Maaf",
            text: "Anda tidak bisa melakukan pendaftaran siswa mutasi karna pendaftaran sudah selesai !",
            icon: "info",
        })
    }

    function checkDate(field) {
        let date = field.value;
        let today = new Date();
        let dd = String(today.getDate()).padStart(2, '0')
        let mm = String(today.getMonth() + 1).padStart(2, '0');
        let yy = String(today.getFullYear());
        let fullDate = yy + '-' + mm + '-' + dd;
        let arrayDate = getRange(date, fullDate);
        let minimalUmur = 4015; // 11 tahun
        let maximalUmur = 4745;
        if (arrayDate.length <= 4015) {
            document.getElementById("notif_tanggal").hidden = false
            $("#btn_daftar").attr('disabled', 'disabled');
        } else {
            $("#btn_daftar").removeAttr('disabled');
            document.getElementById("notif_tanggal").hidden = true

        }
        if (arrayDate.length >= maximalUmur) {
            document.getElementById("notif_tanggal_max").hidden = false
            $("#btn_daftar").attr('disabled', 'disabled');
        } else {
            $("#btn_daftar").removeAttr('disabled');
            document.getElementById("notif_tanggal_max").hidden = true

        }

    }

    function getRange(startDate, stopDate, steps = 1) {
        var dateArray = [];
        let currentDate = new Date(startDate);
        while (currentDate <= new Date(stopDate)) {
            dateArray.push(new Date(currentDate));
            currentDate.setUTCDate(currentDate.getUTCDate() + steps);

        }
        return dateArray
    }

    function back(page) {
        if (page == 3) {
            document.getElementById('data_1').hidden = true;
            document.getElementById('data_2').hidden = false;
            document.getElementById('data_3').hidden = true;
        } else if (page == 2) {
            document.getElementById('data_1').hidden = false;
            document.getElementById('data_2').hidden = true;
            document.getElementById('data_3').hidden = true;
        }
    }
</script>

<?php
function getDatesFromRange($start, $end, $format = 'Y-m-d')
{
    $array = array();
    $interval = new DateInterval('P1D');

    $realEnd = new DateTime($end);
    $realEnd->add($interval);

    $period = new DatePeriod(new DateTime($start), $interval, $realEnd);

    foreach ($period as $date) {
        $array[] = $date->format($format);
    }

    return $array;
}

?>