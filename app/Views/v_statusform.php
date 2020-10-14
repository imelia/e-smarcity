<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STATUS</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="<?=base_url('assets/ckeditor/ckeditor.js');?>"></script>
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
    <?=form_open_multipart(base_url('status/simpan'));?>
    <div class="row">
    	<div class="col-lg-12">
    		<div class="row">
    			<div class="col-md-12">
    				<label>Jenis Status</label>
    				<div class="form-group">
						<select class="form-control" name="jenis_status">
						<?php foreach($status as $l){ ?>
							<option value="<?php echo $l['id_status']; ?>"> <?php echo $l['jenis_status']; ?>     </option>
							<?php } ?>
						</select>
                	</div>	
    			</div>
    		<!--	<div class="col-md-12">
    				<label>Level Status</label>
    				<div class="form-group">
                   		 <input type="text" name="level_status" class="form-control"> 
                	</div>	
    			</div> -->
                
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