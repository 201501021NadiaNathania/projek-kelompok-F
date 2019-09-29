<?php
function tambah_karyawan() {
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
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nama Admin</label>
                                <div class="col-sm-10"><input name="nama_proyek" type="text" class="form-control"></div>
                            </div>
                             <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Alamat Admin</label>
                                <div class="col-sm-10"><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                            </div>
                              <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Email Admin</label>
                                <div class="col-sm-10"><input name="nama_proyek" type="text" class="form-control"></div>
                            </div>
                              <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nomor Telepon Admin</label>
                                <div class="col-sm-10"><input name="nama_proyek" type="text" class="form-control"></div>
                            </div>
                              <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Username Admin</label>
                                <div class="col-sm-10"><input name="nama_proyek" type="text" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10"><input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control"></div>
                            </div>
                           
                            <div class="position-relative row form-check">
                                <div class="col-sm-10 offset-sm-2">
                                    <button class="btn btn-secondary">Add</button>
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
