<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FILE</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="<?=base_url('assets/ckeditor/ckeditor.js');?>"></script>
</head>
<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>DATA FILE</h2>
            </div>
        </div>
    </div>
    <hr>
    <?=form_open_multipart(base_url('download/edit'));?>
    <div class="row">
    	<div class="col-lg-12">
    		<div class="row">
            <div class="col-md-12">
                    <label>File</label><br/>
                    <?php
                        if (!empty($download->nama_file)) {
                            echo '<img src="'.base_url("assets/img/file/$download->nama_file").'" width="150">';
                        }
                    ?>
                    <div class="form-group">
                         <input type="file" name="file_upload" class="form-control"> 
                    </div>  
                </div>
    			<div class="col-md-12">
    				<label>JENIS / NOMOR PERATURAN</label>
    				<div class="form-group">
                        <input type="hidden" name="id_download" class="form-control" value="<?=$download->id_download?>">
                   		 <input type="text" name="judul_download" class="form-control" value="<?=$download->judul_download?>"> 
                	</div>	
    			</div>
                <div class="col-md-12">
    				<label>TENTANG</label>
    				<div class="form-group">
                        <input type="hidden" name="id_download" class="form-control" value="<?=$download->id_download?>">
                   		 <input type="text" name="tentang_download" class="form-control" value="<?=$download->tentang_download?>"> 
                	</div>	
    			</div>

    			<div class="col-md-12">
    				<div class="form-group">
                             <button class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ?')">Simpan</button>
                             <a href="/download/" class="btn btn-warning float-right mb-3" onclick="return confirm('Apakah Anda yakin ingin kembali ?')"><span class="fa fa-plus" ></span> Batal </a> 
                	</div>	
    			</div>
    		</div>
    	</div>
    </div>
    <?= form_close(); ?>
</body>
</html>