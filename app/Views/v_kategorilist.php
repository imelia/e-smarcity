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
    <a href="/kategori/form" class="btn btn-primary"><span class="fa fa-plus"></span> Input Data Modal</a>
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
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
                    <?php foreach($kategori as $row):?>
                <tr>
                    <td><?=$row['id_kategori'];?></td>
                    <td><?php
                        if (!empty($row["gambar"])) {
                            echo '<img src="'.base_url("assets/img/$row[gambar]").'" width="100">';
                        }
                    ?></td>
                    <td><?=$row['nama_kategori'];?></td>
                    
                    <td><a href="kategori/v_kategoriedit/<?=$row['id_kategori'];?>" class="btn btn-primary">Edit</a> | <a href="kategori/hapus/<?=$row['id_kategori'];?>" class="btn btn-danger">Hapus</a> </td>
                </tr>
                <?php endforeach;?>
            </table>
    		</div>
    	</div>
    </div>
    
</body>
</html>