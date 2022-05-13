<?php
class Matakuliah extends CI_Controller{
    // Membuat methode index
    public function index(){
        $this->load->model('matakuliah_model', 'mtkl1');

        // Buat Object Model 1 dan Nilainya
        $this->mtkl1->no=1;
        $this->mtkl1->nama='Penweb';
        $this->mtkl1->sks='3';
        $this->mtkl1->kode='PW2';

        // Simpan object yang kita buat tadi ke dalam array
        $list_mtkl = [$this->mtkl1];
        // Siapkan data untuk dikirim kedalam view, dimana datanya di ambil dari object yang kita simpan ke dalam array
        $data['list_mtkl'] = $list_mtkl;
        // render data dan kirim data ke dalam view
        $this->load->view('matakuliah/index', $data);
    }
}
?>