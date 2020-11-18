<section id="middle">
 <div class="container">
  <div class="row">
  <?php foreach ($user as $t) : ?>
   <div class="middle clearfix">
    <div class="col-sm-12">
	 <div class="middle_inner" style="margin-top:20px">
     <a href="#"> <embed src="<?php echo base_url() ?>/assets/img/file/<?= $t['nama_file']; ?>" width="100%" height="800px" alt="" class="img-fluid">
	 </div>
    </div>
    <?php endforeach; ?>
	</section>
