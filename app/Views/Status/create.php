<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Status</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>
 
    <div class="container mt-5 mb-5 text-center">
        <h4>Data Status</h4>
    </div>
    <div class="container">
        <h4>Form Tambah Status</h4>
        <hr>
        <form action="<?php echo base_url('status/store'); ?>" method="post">
 
        <div class="form-group">
            <label for="jenis_status">Jenis Status</label>
               <select name="jenis_status" class="form-control">
               <option value="">- Pilih -</option>
               <option value="1" <?='jenis_status' == 1 ? "selected" : null?>>Aktif</option>
               <option value="2" <?='jenis_status' == 2 ? "selected" : null?>>Non Aktif</option>
                </select>
                </div>
            <div class="form-group">
            <label for="level_status">Level Status</label>
            <select name="level_status" class="form-control">
               <option value="">- Pilih -</option>
               <option value="1" <?='level_status' == 1 ? "selected" : null?>>Aktif</option>
               <option value="2" <?='level_status' == 2 ? "selected" : null?>>Non Aktif</option>
                </select>
                </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
     
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>