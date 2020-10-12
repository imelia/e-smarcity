<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"></h1>

<div class="card">
    <div class="card-header">
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                 <i class="fa fa-plus">Tambah Data Kategori</i>
         </button>
</div>
    <hr>
    <div class="row">
    	<div class="col-lg-12">
    		 <!-- Success Upload -->
	        <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
	            <div class="alert alert-success">
	                <?php echo session()->getFlashdata('berhasil');?>
	            </div>
	        <?php } ?>
	        
	        <?php 
	            $errors = $validation->getErrors();
	            if(!empty($errors))
	            {
	                echo $validation->listErrors('list');
	            }
	        ?>
    		<?= form_open_multipart(base_url('upload/proses')); ?>
    		<div class="row">
    			<div class="col-md-4">
    				<label>File</label>
    				<div class="form-group">
                   		 <input type="file" name="file_upload" class="form-control"> 
                	</div>	
    			</div>
          <div class="col-md-4">
    				<label>Deskripsi</label>
    				<div class="form-group">
                   		 <input type="text" name="deskripsi" class="form-control"> 
                	</div>	
    			</div>
          <div class="col-md-4">
    				<label>Link</label>
    				<div class="form-group">
                   		 <input type="text" name="link" class="form-control"> 
                	</div>	
    			</div>
    			<div class="col-md-4">
    				<label>Aksi</label>
    				<div class="form-group">
                   		  <?= form_submit('Send', 'Simpan') ?> 
                	</div>	
    			</div>
    		</div>
    		<?= form_close() ?>
    	</div>
    </div>
    <div class="card">
        <div class="card-body">
            </div>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
		            <th>No</th>
		            <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Link</th>
		            </tr>
                </thead>
        <tbody>
		        	<?php foreach($gambar_modal as $row):?>
		        <tr>
		        	<td><?=$row['id_modal'];?></td>
		           
		            <td><img src="<?=base_url('assets/img/'.$row['gambar_modal']);?>" width="100"></td>
              <td><?=$row['deskripsi'];?></td>
              <td><?=$row['link'];?></td>
            </tr>
		        <?php endforeach;?>
		    </table>
		</div>
	</div>
</body>
</html>