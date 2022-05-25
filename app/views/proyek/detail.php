<style>
    /*-----------------
    card shadow
---------------------*/
    .card {
        border-radius: 4px;
        background: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
        cursor: pointer;
    }
</style>


<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="modalProyek" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabelProyek">Tambah Data Proyek</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>proyek/ubah" method="post">
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
    <table class="table table-borderless">
        <tbody>
            <tr>
                <td></td>
                <td>
                    <div class="col lg-1">
                        <?php Flasher::flash(); ?>
                    </div>
                </td>
                <td style="text-align: left; width: 55%;"></td>
            </tr>
            <tr>
                <td style="text-align: right;"><a href="<?= BASEURL; ?>proyek" class="btn btn-primary mt-1">←</a></td>
                <td style="text-align: left;">
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
                        </div>
                        <div class="card-footer text-center">
                            <a href="<?= BASEURL; ?>proyek/detail/<?= $data['proyek']['id']; ?>" style="text-decoration:none;" class="btn btn-success tampilModalUbah" data-bs-toggle="modal" data-bs-target="#modalProyek" data-id="<?= $data['proyek']['id'] ?>"> Ubah</a>
                        </div>
                    </div>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>