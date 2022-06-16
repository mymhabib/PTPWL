<style>
    /*-----------------
    card animation
---------------------*/
    .card {
        border-radius: 4px;
        background: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
        cursor: pointer;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
    }
</style>

<div class="container">

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
    <div class="col-20">
        <h2>Daftar Proyek</h2>
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
        <div class="row row-cols-lg-3">

            <!-------------------------------------------------------------------------------------------
             menghitung selisih waktu sekarang dan waktu terakhir update data (output: x waktu yang lalu)
            --------------------------------------------------------------------------------------------->

            <?php foreach ($data['proyek'] as $pry) : ?>
                <?php
                $tanggalUpdate = $pry['tanggal_update'];
                date_default_timezone_set('Asia/Jakarta');
                $datenow = date('Y-m-d H:i:s');
                $currentDateTime = new DateTime($datenow);
                $passedDateTime = new DateTime($tanggalUpdate);
                $interval = $currentDateTime->diff($passedDateTime);
                //$elapsed = $interval->format('%y years %m months %a days %h hours %i minutes %s seconds');
                $day = $interval->format('%a');
                $hour = $interval->format('%h');
                $min = $interval->format('%i');
                $seconds = $interval->format('%s');
                $output = '';
                $outputDay = '';
                $outputHour = '';
                $outputMin = '';
                $outputSeconds = '';

                if ($day > 7) {
                    $dateArray = date_parse_from_format('Y/m/d', $tanggalUpdate);
                    $monthName = DateTime::createFromFormat('!m', $dateArray['month'])->format('F');
                    $output = "diupdate ". $dateArray['day'] . " " . $monthName  . " " . $dateArray['year'];
                } else if ($day >= 1 && $day <= 7) {
                    $outputDay = "diupdate ". $day . " hari yang lalu";
                } else if ($hour >= 1 && $hour <= 24) {
                    $outputHour = "diupdate ". $hour . " jam yang lalu";
                } else if ($min >= 1 && $min <= 60) {
                    $outputMin = "diupdate ". $min . " menit yang lalu";
                } else if ($seconds >= 1 && $seconds <= 60) {
                    $outputSeconds = "diupdate ". $seconds . " detik yang lalu";
                }

                ?>


                <a href="<?= BASEURL; ?>proyek/detail/<?= $pry['id']; ?>" style="text-decoration:none;">
                    <div class="card text-center ml-4 mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><?= $pry['nama_proyek']; ?></h5>
                            <p class="text-muted card-subtitle"><?= $pry['pt']; ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?php echo $output . $outputDay . $outputHour . $outputMin . $outputSeconds ?></small>
                        </div>
                    </div>
                </a>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- disable resubmission confirmation -->
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>