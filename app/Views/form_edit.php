<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MODAL</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="<?=base_url('assets/ckeditor/ckeditor.js');?>"></script>
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
    <?=form_open_multipart(base_url('blog/edit'));?>
    <div class="row">
    	<div class="col-lg-12">
    		<div class="row">
            <div class="col-md-12">
                    <label>Gambar</label><br/>
                    <?php
                        if (!empty($artikel->gambar_modal)) {
                            echo '<img src="'.base_url("assets/images/$artikel->gambar_modal").'" width="150">';
                        }
                    ?>
                    <div class="form-group">
                         <input type="file" name="file_upload" class="form-control"> 
                    </div>  
                </div>
    			<div class="col-md-12">
    				<label>Deskripsi</label>
    				<div class="form-group">
                        <input type="hidden" name="id" class="form-control" value="<?=$artikel->id_modal?>">
                   		 <input type="text" name="deskripsi" class="form-control" value="<?=$artikel->deskripsi?>"> 
                	</div>	
    			</div>
    			<div class="col-md-12">
    				<label>Link</label>
    				<div class="form-group">
                   		 <input type="text" name="link" class="form-control" value="<?=$artikel->link?>"> 
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