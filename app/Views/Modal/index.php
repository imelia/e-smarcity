<!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

<div class="card">
    <div class="card-header">
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                 <i class="fa fa-plus">Tambah Data Kategori</i>
         </button>
</div>
    <div class="card">
        <div class="card-body">
            </div>
            </div>
            <table class="table table-striped">
                <thead>
                  <tr>
                     <th>No</th>
                     <th>Id Modal</th>
                     <th>Gambar Modal</th>
                     <th>Deskripsi</th>
                     <th>Link</th>
                 </tr>
                </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($modal as $row) : ?> 
            <tr>
                <td scope="row"><?= $i; ?></td>
                <td><?= $row['id_modal']; ?></td>
                <td><?= $row['gambar_modal']; ?></td>
                <td><?= $row['deskripsi']; ?></td>
                <td><?= $row['link']; ?></td>
            </tr> 
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="modalTambah">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah <?= $judul; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('modal/tambah'); ?>" method="post">
        <div class="form-group mb-0">
            <label for="id_modal"></label>
            <input type="text" name="id_modal" id="" class="form-control" placeholder="Masukkan Nama Kategori">
        </div>

        <div class="form-group mb-0">
            <label for="gambar"></label>
            <input type="file" name="gambar_modal" id="gambar" class="form-control-file" enctype="multipart/form-data">
            
        </div>

        <div class="form-group mb-0">
            <label for="deskripsi"></label>
            <input type="text" name="deskripsi" id="" class="form-control" placeholder="Masukkan Deskripsinya">
            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>