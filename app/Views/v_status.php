<div class="container">
 <h3>Status Lists</h3>
        <a href="<?php echo base_url('status/create'); ?>" class="btn btn-success float-right mb-3">Tambah Status</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Jenis Status</th>
                    <th>Level Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                
                    <tr> 
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $data['jenis_status']; ?></td>
                        <td><?php echo $data['level_status']; ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="<?php echo base_url('status/edit/'.$data['id_status']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo base_url('status/delete/'.$data['id_status']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus status ini <?php echo $data['jenis_status']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>