 <div class="container">
 <h3>Kategori Lists</h3>
        <a href="<?php echo base_url('kategori/create'); ?>" class="btn btn-success float-right mb-3">Tambah Kategori</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Name</th>
                    <th>Gambar</th> 
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                
                    <tr> 
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $data['nama_kategori']; ?></td>
                        <td><?php echo $data['status']; ?></td>
                        <td><?php echo $data['gambar']; ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="<?php echo base_url('kategori/edit/'.$data['id_kategori']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo base_url('kategori/delete/'.$data['id_kategori']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini <?php echo $data['nama_kategori']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>