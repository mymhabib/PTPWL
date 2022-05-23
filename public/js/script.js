console.log($_SESSION['ptpwl_username']);
$(function() {
    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Proyek');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Ubah Data Proyek');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/PTPWL/public/proyek/ubah');

    });
    const id = $(this).data('id');
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


function openNav() {
    document.getElementById("mySidebar").style.width = "200px";
    document.getElementById("main").style.marginLeft = "200px";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}