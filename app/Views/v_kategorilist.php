<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url() ?>/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
    
	<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Table</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
    <hr>
    
    <a href="/home" class="btn btn-warning float-right mb-3" onclick="return confirm('Apakah Anda yakin ingin ke Halaman Utama ?')"><span class="fa fa-plus" ></span> Kembali </a>
    <a href="/kategori/form" class="btn btn-primary"  onclick="return confirm('Apakah Anda yakin ?')"><span class="fa fa-plus"></span> Input Data Kategori</a>
    <hr>
            <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('berhasil');?>
                </div>
            <?php } ?>
            
            <?php 
                $errors = $validation->getErrors();
                if(!empty($errors))
                {
                    echo $validation->listErrors();
                }
            ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Tabel Kategori</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul Kategori</th>
                    <th>Link</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                    <?php foreach($kategori as $row):?>
                <tr>
                    <td><?=$row['id_kategori'];?></td>
                    <td><?php
                        if (!empty($row["gambar_kategori"])) {
                            echo '<img src="'.base_url("assets/img/kategori/$row[gambar_kategori]").'" width="100">';
                        }
                    ?></td>
                    <td><?=$row['judul_kategori'];?></td>
                    <td><?=$row['link'];?></td>
                    
                    <td><a href="kategori/form_edit/<?=$row['id_kategori'];?>" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin mengedit kategori <?php echo $row['judul_kategori']; ?> ini?')">Edit</a> | <a href="kategori/hapus/<?=$row['id_kategori'];?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori <?php echo $row['judul_kategori']; ?> ini?')">Hapus</a> </td>
                </tr>
                <?php endforeach;?>
                </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>/assets/js/demo/datatables-demo.js"></script>

    
</body>
</html>