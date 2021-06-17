<div class="row">
   <div class="col-lg-6">
      <?php Flasher::flash(); ?>
   </div>
</div>

<div class="row mb-2">
   <div class="col-lg-6">
      <button type="button" class="btn btn-primary tambahData" data-bs-toggle="modal" data-bs-target="#judulModal">
         Tambah Data
      </button>
   </div>
</div>

<div class="row mb-2">
   <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
         <div class="input-group">
            <input type="text" class="form-control" placeholder="cari nama mahasiswa.." name="keyword" autocomplete="off">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
         </div>
      </form>
   </div>
</div>


<div class="row">
   <h3>Daftar Mahasiswa</h3>
   <ul class="list-group">
      <?php foreach ($data['mhs'] as $m) : ?>
         <li class="list-group-item">
            <?= $m['nama']; ?>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $m['id']; ?>" class="badge bg-primary float-end ms-1">detail</a>

            <!-- ubahnya menggunakan modal -->
            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $m['id']; ?>" class="badge bg-success float-end ms-1 ubahData" data-bs-toggle="modal" data-bs-target="#judulModal" data-id=<?= $m['id']; ?>>ubah</a>

            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $m['id']; ?>" class="badge bg-danger float-end ms-1" onclick="return confirm('yakiin dihapus?');">hapus</a>
         </li>
      <?php endforeach; ?>
   </ul>
</div>

<!-- Modal -->
<div class="modal fade" id="judulModal" tabindex="-1" aria-labelledby="tambahData" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="tambahData">Tambah Data Mahasiswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>

         <div class="modal-body">

            <form action="<?= BASEURL; ?>/mahasiswa/tambahData" method="post">

               <input type="hidden" name="id" id="id">
               <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
               </div>
               <div class="mb-3">
                  <label for="nim" class="form-label">NIM</label>
                  <input type="password" class="form-control" id="nim" name="nim" autocomplete="off">
               </div>
               <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" autocomplete="off">
               </div>
               <div class="mb-3">
                  <label for="jurusan" class="form-label">Jurusan</label>
                  <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                     <option value="Teknik Informatika">Teknik Informatika</option>
                     <option value="Teknik Mesin">Teknik Mesin</option>
                     <option value="Teknik Kimia">Teknik Kimia</option>
                  </select>
               </div>

         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
         </div>
         </form>
      </div>
   </div>
</div>