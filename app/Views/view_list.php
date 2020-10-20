<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MODAL</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>DATA-DATA MODAL</h2>
            </div>
        </div>
    </div>
    <hr>
    <a href="/home" class="btn btn-warning float-right mb-3" onclick="return confirm('Apakah Anda yakin ingin kembali ?')"><span class="fa fa-plus" ></span> Kembali </a>
    <a href="/blog/form" class="btn btn-success float-right mb-3" onclick="return confirm('Apakah Anda yakin ?')"><span class="fa fa-plus" ></span> Input Data Modal</a>
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
                    <th>Deskripsi</th>
                    <th>Link</th>
                    <th>Aksi</th>
                </tr>
                    <?php foreach($artikel as $row):?>
                <tr>
                    <td><?=$row['id_modal'];?></td>
                    <td><?php
                        if (!empty($row["gambar_modal"])) {
                            echo '<img src="'.base_url("assets/img/modal/$row[gambar_modal]").'" width="100">';
                        }
                    ?></td>
                    <td><?=$row['deskripsi'];?></td>
                    <td><?=$row['link'];?></td>
                    
                    <td><a href="blog/form_edit/<?=$row['id_modal'];?>" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin edit modal <?php echo $row['deskripsi']; ?> ini?')">Edit</a> | <a href="blog/hapus/<?=$row['id_modal'];?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus modal <?php echo $row['deskripsi']; ?> ini?')">Hapus</a> </td>
                </tr>
                <?php endforeach;?>
            </table>
    		</div>
    	</div>
    </div>
    
</body>
</html>