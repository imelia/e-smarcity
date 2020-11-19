<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Modeldownload;
 
class Download extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new Modeldownload();
        if (!$this->validate([]))
        {
            $data['validation'] = $this->validator;
            $data['download'] = $model->getDownload();
            return view('v_downloadlist',$data);
            
        }
    }

    public function form(){
        helper('form');
        return view('v_downloadform');
    }

    public function simpan(){
        $model = new Modeldownload();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('download');
        }
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,application/pdf]|max_size[file_upload,10000]'
        ]);
 
        if ($validation == FALSE) {
        $data = array(
            'judul_download'  => $this->request->getPost('judul_download'),
            'tentang_download'  => $this->request->getPost('tentang_download'),
        );
        } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/img/file/');
        $data = array(
            'judul_download'  => $this->request->getPost('judul_download'),
            'tentang_download'  => $this->request->getPost('tentang_download'),
            'nama_file' => $upload->getName(),
        );
        }
        $model->SimpanDownload($data);
        return redirect()->to('./download')->with('berhasil', 'Data Berhasil di Simpan');
    }

    public function form_edit($id){
        $model = new Modeldownload();
        helper('form');
        $data['download'] = $model->PilihDownload($id)->getRow();
        return view('v_downloadedit',$data);
    }

    public function edit(){
        $model = new Modeldownload();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('download');
        }
        $id = $this->request->getPost('id_download');
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png,application/pdf]|max_size[file_upload,10000]'
        ]);
 
        if ($validation == FALSE) {
        $data = array(
            'judul_download'  => $this->request->getPost('judul_download'),
            'tentang_download'  => $this->request->getPost('tentang_download'),
           
        );
        } else {
        $dt = $model->PilihDownload($id)->getRow();
        $nama_file = $dt->nama_file;
        $path = '../public/assets/img/file/';
        @unlink($path.$gambar);
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/img/file/');
        $data = array(
            'judul_download'  => $this->request->getPost('judul_download'),
            'tentang_download'  => $this->request->getPost('tentang_download'),
            'nama_file' => $upload->getName(),
            
        );
        }
        
        $model->edit_data($id,$data);
        return redirect()->to('./download')->with('berhasil', 'Data Berhasil di Ubah');
        
    }

    public function hapus($id){
        $model = new Modeldownload();
        $dt = $model->PilihDownload($id)->getRow();
        $model->HapusDownload($id);
        $nama_file = $dt->nama_file;
        $path = '../public/assets/img/file/';
        @unlink($path.$nama_file);
        return redirect()->to('./download')->with('berhasil', 'Data Berhasil di Hapus');
    }
     
}