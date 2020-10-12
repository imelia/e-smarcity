<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

<div class="card">
    <div class="card-header">
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                 <i class="fa fa-plus">Tambah Data Status</i>
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
                     <th>Jenis Status</th>
                     <th>Level Status</th>
                 </tr>
                </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($status as $row) : ?> 
            <tr>
                <td scope="row"><?= $i; ?></td>
                <td><?= $row['jenis_status']; ?></td>
                <td><?= $row['level_status']; ?></td>
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
      <!--<div class="modal-body">
        <form action="<?= base_url('status/tambah'); ?>" method="post">
        <div class="form-group mb-0">
            <label for="jenis_status"></label>
            <input type="text" name="jenis_status" id="" class="form-control" placeholder="Masukkan Nama Kategori">
            </div>

        <div class="form-group mb-0">
            <label for="gambar"></label>
            <input type="file" name="gambar" id="gambar" class="form-control-file" enctype="multipart/form-data">
            <img src="assets/img/ranuagung.jpg"/>
            </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div> -->