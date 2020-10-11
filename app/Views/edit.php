<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>
 
    <div class="container mt-5 mb-5 text-center">
        <h4>Edit Kategori</h4>
    </div>
    <div class="container">
        <h4>Form Edit Kategori</h4>
        <hr>
        <form action="<?php echo base_url('kategori/update/'.$kategori['id_kategori']); ?>" method="post">
 
            <div class="form-group">
                <label for="">Nama Kategori</label>
                <input type="text" name="nama_kategori" value="<?php echo $kategori['nama_kategori']; ?>" class="form-control" placeholder="Nama Produk">
            </div>
            <div class="form-group">
                <label for="">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control-file">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</body>
</html> 