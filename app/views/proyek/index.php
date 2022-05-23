<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <!-- button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#modalProyek">
                Tambah Data
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>proyek/cari" method="post">
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="cari proyek.." name="keyword" id="keyword" autocomplete="off" style="margin-bottom: 10px;">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-10">
        <h2>Daftar Proyek</h2>
        <div class="modal fade" id="modalProyek" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabelProyek">Tambah Data Proyek</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= BASEURL; ?>proyek/tambah" method="post">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="pt">Nama PT</label>
                                <input type="text" class="form-control" id="pt" name="pt">
                            </div>
                            <div class="form-group">
                                <label for="nama_proyek">Nama Proyek</label>
                                <input type="text" class="form-control" id="nama_proyek" name="nama_proyek">
                            </div>
                            <div class="form-group">
                                <label for="Lokasi">Lokasi</label>
                                <input type="text" class="form-control" id="lokasi" name="lokasi">
                            </div>
                            <div class="form-group">
                                <label for="maps">Link Google Maps</label>
                                <input type="text" class="form-control" id="maps" name="maps">
                            </div>
                            <div class="form-group">
                                <label for="panjang">Panjang</label>
                                <input type="number" class="form-control" id="panjang" name="panjang">
                            </div>
                            <div class="form-group">
                                <label for="lebar">Lebar</label>
                                <input type="number" class="form-control" id="lebar" name="lebar">
                            </div>
                            <div class="form-group">
                                <label for="link">Link File Google Drive</label>
                                <input type="text" class="form-control" id="link" name="link">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary " data-target="#modalProyek">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            <?php foreach ($data['proyek'] as $pry) : ?>
                <div class="col-9 col-sm-4">
                    <div class="card ml-3 mb-3" style="height: 12rem;">
                        <div class="card-body ">
                            <li class="list-group-item  ml-auto p-1 d-flex justify-content-between align-items-center" style="border: none;">
                                <?= $pry['nama_proyek']; ?>
                            </li>
                            <li class="list-group-item  ml-auto p-1 d-flex justify-content-between text-muted align-items-center" style="border: none;">
                                <?= $pry['pt']; ?>
                            </li>
                            <li class="list-group-item  ml-auto p-1 d-flex justify-content-between align-items-center" style="border: none;">
                                <a href="<?= BASEURL; ?>proyek/detail/<?= $pry['id']; ?>" class="badge bg-success " style="text-decoration:none;"> Detail</a>
                            </li>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>