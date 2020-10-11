<div class="container mt-5 mb-5 text-center">
        <h4>Tutorial CRUD Menggunakan Codeigniter 4 - Ilmu Coding</h4>
    </div>
    <div class="container">
        <h4>Form Tambah Kategori</h4>
        <hr>
        <form action="<?php echo base_url('kategori/store'); ?>" method="post">
 
            <div class="form-group">
                <label for="">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori">
            </div>
            <div class="form-group">
                <label for="">Gambar Kategori</label>
                <textarea name="gambar"class="form-control" placeholder="Gambar"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>