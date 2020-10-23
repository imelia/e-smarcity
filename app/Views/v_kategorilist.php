<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KATEGORI</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>DATA KATEGORI</h2>
            </div>
        </div>
    </div>
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
    <div class="row">
    	<div class="col-lg-12">
    		<div class="row">
                <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul Kategori</th>
                    <th>Link</th>
                    <th>Aksi</th>
                </tr>
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
            </table>
    		</div>
    	</div>
    </div>
    
</body>
</html>