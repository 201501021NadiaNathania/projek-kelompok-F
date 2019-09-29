<?php
function buat_proyek() {
    ?>
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper"></div>
        </div>
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form class="">
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nama Proyek</label>
                                <div class="col-sm-10"><input name="nama_proyek" type="text" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Jangka Waktu Proyek</label>
                                <div class="col-sm-10"><input name="jangka_waktu_proyek" id="jwp" type="text" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Nama Karyawan</label>
                                <div class="col-sm-10"><input name="nama_karyawan" id="nk" type="text" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Tugas Karyawan</label>
                                <div class="col-sm-10"><input name="tugas_karyawan" id="tk" type="text" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Rincian Dana Pengeluaran</label>
                                <div class="col-sm-10"><input name="rincian_dana_pengeluaran" id="rdp" type="text" class="form-control"><br>
                                <input name="rincian_dana_pengeluaran" id="rdp" type="text" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Detail Pembayaran Gaji</label>
                                <div class="col-sm-10"><input name="detail_pembayaran_gaji" id="nk" type="text" class="form-control"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Tanggal Pembayaran Gaji</label>
                                <div class="col-sm-10"><input name="tanggal_pembayaran_gaji" id="nk" type="date" class="form-control"></div>
                            </div>
                            <fieldset class="position-relative row form-group">
                                <legend class="col-form-label col-sm-2">Prosentase Pengerjaan :</legend>
                                <div class="col-sm-10">
                                    <input type="checkbox" name="pengerjaan[]" value="Makan"> Desain User Interface <br />
                                    <input type="checkbox" name="pengerjaan[]" value="Minum"> Coding Program <br />
                                    <input type="checkbox" name="pengerjaan[]" value="Tidur"> Penanganan Database <br />
                                </div>
                            </fieldset>
                            <div class="position-relative row form-group"><label for="checkbox2" class="col-sm-2 col-form-label">Checkbox</label>
                                <div class="col-sm-10">
                                    <div class="position-relative form-check"><label class="form-check-label"><input id="checkbox2" type="checkbox" class="form-check-input"> Check me out</label></div>
                                </div>
                            </div>
                            <div class="position-relative row form-check">
                                <div class="col-sm-10 offset-sm-2">
                                    <button class="btn btn-secondary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
