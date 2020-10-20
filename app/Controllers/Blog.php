<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ModelsBlog;
 
class Blog extends BaseController
{
    public function index()
    {
        $model = new ModelsBlog();
        if (!$this->validate([]))
        {
            $data['validation'] = $this->validator;
            $data['artikel'] = $model->getArtikel();
            
            return view('view_list',$data);
        }
    }

    public function form(){
        helper('form');
        return view('view_form');
    }

    public function simpan(){
        $model = new ModelsBlog();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('blog');
        }
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,2000]'
        ]);
 
        if ($validation == FALSE) {
        $data = array(
            'deskripsi'  => $this->request->getPost('deskripsi'),
            'link'  => $this->request->getPost('link'),
        );
        } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/img/modal/');
        $data = array(
            'deskripsi'  => $this->request->getPost('deskripsi'),
            'gambar_modal' => $upload->getName(),
            'link'  => $this->request->getPost('link'),
        );
        }
        $model->SimpanBlog($data);
        return redirect()->to('./blog')->with('berhasil', 'Data Berhasil di Simpan');
    }

    public function form_edit($id){
        $model = new ModelsBlog();
        helper('form');
        $data['artikel'] = $model->PilihBlog($id)->getRow();
        return view('form_edit',$data);
    }

    public function edit(){
        $model = new ModelsBlog();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('blog');
        }
        $id = $this->request->getPost('id');
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);
 
        if ($validation == FALSE) {
        $data = array(
            'deskripsi'  => $this->request->getPost('deskripsi'),
            'link'  => $this->request->getPost('link'),
        );
        } else {
        $dt = $model->PilihBlog($id)->getRow();
        $gambar = $dt->gambar_modal;
        $path = '../public/assets/img/modal/';
        @unlink($path.$gambar);
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/img/modal/');
        $data = array(
            'deskripsi'  => $this->request->getPost('deskripsi'),
            'gambar_modal' => $upload->getName(),
            'link'  => $this->request->getPost('link'),
        );
        }
        $model->edit_data($id,$data);
        return redirect()->to('./blog')->with('berhasil', 'Data Berhasil di Ubah');
        
    }

    public function hapus($id){
        $model = new ModelsBlog();
        $dt = $model->PilihBlog($id)->getRow();
        $model->HapusBlog($id);
        $gambar = $dt->gambar_modal;
        $path = '../public/assets/img/modal/';
        @unlink($path.$gambar);
        return redirect()->to('./blog')->with('berhasil', 'Data Berhasil di Hapus');
    }

}