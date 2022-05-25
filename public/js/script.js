console.log('zzxsx');
$(function() {
    $('.tombolTambahData').on('click', function() {
        $('#modalLabelProyek').html('Tambah Data Proyek');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#pt').val("");
        $('#nama_proyek').val("");
        $('#lokasi').val("");
        $('#maps').val("");
        $('#link').val("");
        $('#panjang').val("");
        $('#lebar').val("");
        $('#id').val("");
    });

    $('.tampilModalUbah').on('click', function() {
        $('#modalLabelProyek').html('Ubah Data Proyek');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/PTPWL/public/proyek/ubah');

        const id = $(this).data('id');
        console.log(id);
        $.ajax({
            url: 'http://localhost/PTPWL/public/proyek/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#pt').val(data.pt);
                $('#nama_proyek').val(data.nama_proyek);
                $('#lokasi').val(data.lokasi);
                $('#maps').val(data.maps);
                $('#link').val(data.link);
                $('#panjang').val(data.panjang);
                $('#lebar').val(data.lebar);
                $('#id').val(data.id);
            }

        });
    });


});