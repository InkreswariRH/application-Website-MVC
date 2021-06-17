$(function () {
   $('.tambahData').on('click', function () {
      $('#tambahData').html('Tambah Data Mahasiswa');
      $('.modal-footer button[type=submit]').html('Tambah Data');
   });

   $('.ubahData').on('click', function () {
      $('#tambahData').html('Ubah Data Mahasiswa');
      $('.modal-footer button[type=submit]').html('Ubah Data');
      $('.modal-body form').attr('action', 'http://localhost/github/project2/public/mahasiswa/ubah');

      const id = $(this).data('id');
      $.ajax({
         url: 'http://localhost/github/project2/public/mahasiswa/getubah',
         // id yang sebelah kiri adalah nama dari data, sementara id yang sebelah kanan adalah isi dari data (yaitu konstanta id yang dibuat di baris 11)
         data: { id: id },
         method: 'post',
         dataType: 'json',
         success: function (data) {
            $('#nama').val(data.nama);
            $('#nim').val(data.nim);
            $('#email').val(data.email);
            $('#jurusan').val(data.jurusan);
            $('#id').val(data.id);
         }

      });
   });
});
