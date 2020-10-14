<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STATUS</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>DATA STATUS</h2>
            </div>
        </div>
    </div>
    <hr>
    <a href="/status/form" class="btn btn-primary"><span class="fa fa-plus"></span> INPUT DATA STATUS</a>
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
                    <th>Jenis Status</th>
                    <th>Level Status</th>
                    <th>Aksi</th>
                </tr>
                    <?php foreach($status as $row):?>
                <tr>
                    <td><?=$row['id_status'];?></td>
                    <td><?=$row['jenis_status'];?></td>
                    <td><?=$row['level_status'];?></td>
                    
                    <td><a href="status/v_statusedit/<?=$row['id_status'];?>" class="btn btn-primary">Edit</a> | <a href="status/hapus/<?=$row['id_status'];?>" class="btn btn-danger">Hapus</a> </td>
                </tr>
                <?php endforeach;?>
            </table>
    		</div>
    	</div>
    </div>
    
</body>
</html>