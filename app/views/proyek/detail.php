<div class="container mt-9">

    <div class="card" style="width: 30rem;">
        <div class="card-body">

            <h5 class="card-title"><?= $data['proyek']['nama_proyek']; ?></h5>
            <h6 class="card-subtitle mb-2 mt-2 text-muted"><?= $data['proyek']['pt']; ?></h6>
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Lokasi:</th>
                        <td><?= $data['proyek']['lokasi']; ?></p></td>
                    </tr>
                    <tr>
                        <th scope="row">Google Maps:</th>
                        <td><a style="text-decoration: underline;" href="<?= $data['proyek']['maps']; ?>"><?= $data['proyek']['maps']; ?></a></p></td>     
                    </tr>
                    <tr>
                        <th scope="row">Panjang:</th>
                        <td><?= $data['proyek']['panjang']; ?> m</p></td>
                        
                    </tr>
                    <tr>
                        <th scope="row">Lebar:</th>
                        <td><?= $data['proyek']['lebar']; ?> m</p></td>
                    </tr>
                    <tr>
                        <th scope="row">Link File:</th>
                        <td><a style="text-decoration: underline;" href="<?= $data['proyek']['link']; ?>"><?= $data['proyek']['link']; ?></a></p></td>
                    </tr>
                </tbody>
            </table>


            <a href="<?= BASEURL; ?>proyek" class="btn btn-primary">Kembali</a>

        </div>
    </div>

</div>