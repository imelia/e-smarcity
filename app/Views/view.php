<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Membuat CRUD Input Gambar</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><?php echo $artikel->deskripsi; ?></h2>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
    	<div class="col-lg-12">
    		<div class="row">
                <?php
                        if (!empty($artikel->gambar_modal)) {
                            echo '<img src="'.base_url("assets/img/modal/$artikel->gambar_modal").'" width="30%">';
                        }
                ?>
                <?php echo $artikel->link; ?>
    		</div>
    	</div>
    </div>
    
</body>
</html>