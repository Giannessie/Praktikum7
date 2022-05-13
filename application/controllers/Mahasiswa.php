<?php
class Mahasiswa extends CI_Controller{
    // Membuat methode index
    public function index(){
        $this->load->model('mahasiswa_model', 'mhs1');

        // Buat Object Model 1 dan Nilainya
        $this->mhs1->id=1;
        $this->mhs1->nim='0111';
        $this->mhs1->nama='Nessie';
        $this->mhs1->gender='P';
        $this->mhs1->ipk=4.00;

        $this->load->model('mahasiswa_model', 'mhs2');
        // Buat Object Model 1 dan Nilainya
        $this->mhs2->id=2;
        $this->mhs2->nim='0222';
        $this->mhs2->nama='Mark';
        $this->mhs2->gender='L';
        $this->mhs2->ipk=3.85;

        // Simpan object yang kita buat tadi ke dalam array
        $list_mhs = [$this->mhs1, $this->mhs2];
        // Siapkan data untuk dikirim kedalam view, dimana datanya di ambil dari object yang kita simpan ke dalam array
        $data['list_mhs'] = $list_mhs;
        // render data dan kirim data ke dalam view
        $this->load->view('mahasiswa/index', $data);
    }
}
?>