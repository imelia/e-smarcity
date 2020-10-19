<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KATEGORI</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="<?=base_url('assets/ckeditor/ckeditor.js');?>"></script>
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
    <?=form_open_multipart(base_url('kategori/edit'));?>
    <div class="row">
    	<div class="col-lg-12">
    		<div class="row">
            <div class="col-md-12">
                    <label>Gambar</label><br/>
                    <?php
                        if (!empty($kategori->gambar)) {
                            echo '<img src="'.base_url("assets/img/$kategori->gambar").'" width="150">';
                        }
                    ?>
                    <div class="form-group">
                         <input type="file" name="file_upload" class="form-control"> 
                    </div>  
                </div>
    			<div class="col-md-12">
    				<label>NAMA KATEGORI</label>
    				<div class="form-group">
                        <input type="hidden" name="id_kategori" class="form-control" value="<?=$kategori->id_kategori?>">
                   		 <input type="text" name="nama_kategori" class="form-control" value="<?=$kategori->nama_kategori?>"> 
                	</div>	
    			</div>
                <div class="col-md-12">
    				<label>STATUS</label>
    				<div class="form-group">
                        <input type="hidden" name="id" class="form-control" value="<?=$kategori->status?>">
                   		 <input type="text" name="status" class="form-control" value="<?=$kategori->status?>"> 
                	</div>	
    			</div>

    			<div class="col-md-12">
    				<div class="form-group">
                   		  <button class="btn btn-primary">Simpan</button> 
                	</div>	
    			</div>
    		</div>
    	</div>
    </div>
    <?= form_close(); ?>
</body>
</html>