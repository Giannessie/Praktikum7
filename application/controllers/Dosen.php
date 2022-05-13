<?php
class Dosen extends CI_Controller{
    // Membuat methode index
    public function index(){
        $this->load->model('dosen_model', 'dsn1');

        // Buat Object Model 1 dan Nilainya
        $this->dsn1->no=1;
        $this->dsn1->nidn='011';
        $this->dsn1->pendidikan='S1';

        $this->load->model('dosen_model', 'dsn2');
        // Buat Object Model 1 dan Nilainya
        $this->dsn2->no=2;
        $this->dsn2->nidn='022';
        $this->dsn2->pendidikan='S2';

        $this->load->model('dosen_model', 'dsn3');
        // Buat Object Model 1 dan Nilainya
        $this->dsn3->no=3;
        $this->dsn3->nidn='033';
        $this->dsn3->pendidikan='S3';

        // Simpan object yang kita buat tadi ke dalam array
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        // Siapkan data untuk dikirim kedalam view, dimana datanya di ambil dari object yang kita simpan ke dalam array
        $data['list_dsn'] = $list_dsn;
        // render data dan kirim data ke dalam view
        $this->load->view('dosen/index', $data);
    }
}
?>