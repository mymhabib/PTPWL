<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
</div>
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="modalProyek" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
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
<div class="container mt-9">

    <div class="card" style="width: 30rem;">
        <div class="card-body">

            <h5 class="card-title"><?= $data['proyek']['nama_proyek']; ?></h5>
            <h6 class="card-subtitle mb-2 mt-2 text-muted"><?= $data['proyek']['pt']; ?></h6>
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Lokasi:</th>
                        <td><?= $data['proyek']['lokasi']; ?></p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Google Maps:</th>
                        <td><a style="text-decoration: underline;" href="<?= $data['proyek']['maps']; ?>" target="_blank" rel="noopener noreferrer"><?= $data['proyek']['maps']; ?></a></p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Panjang:</th>
                        <td><?= $data['proyek']['panjang']; ?> m</p>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">Lebar:</th>
                        <td><?= $data['proyek']['lebar']; ?> m</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Link File:</th>
                        <td><a style="text-decoration: underline;" href="<?= $data['proyek']['link']; ?>" target="_blank" rel="noopener noreferrer"><?= $data['proyek']['link']; ?></a></p>
                        </td>
                    </tr>
                </tbody>
            </table>


            <a href="<?= BASEURL; ?>proyek" class="btn btn-primary">Kembali</a>
            <a href="<?= BASEURL; ?>proyek/detail/<?= $data['proyek']['id']; ?>" style="text-decoration:none;" class="btn btn-success tampilModalUbah" data-bs-toggle="modal" data-bs-target="#modalProyek" data-id="<?= $data['proyek']['id'] ?>"> Ubah</a>

        </div>
    </div>

</div>