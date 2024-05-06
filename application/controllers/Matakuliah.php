<?php
class Matakuliah extends CI_Controller
{
  public function index()
  {
       $this->load->view('view-form-matakuliah');
  }
  public function cetak()
  {
    $this->form_validation->set_rules(
        'kode', 
        'Kode Matakuliah', 
        'required|min_length[3]', 
    [   'required' => 'Kode Matakuliah Harus diisi',
        'min_lenght' => 'Kode terlalu pendek'
    ]
 );
    $this->form_validation->set_rules(
        'nama', 
        'Nama Matakuliah',
        'required|min_length[3]', 
    [   'required' => 'Nama Matakuliah Harus diisi',
        'min_lenght' => 'Nama terlalu pendek'
    ]);

    $this->form_validation->set_rules(
        'sks', 
        'Pilih SKS',
        'required', 
    [   'required' => 'SKS Harus diisi',
    ]
    
);
    
    $this->form_validation->set_rules(
    'status', 
    'Pilih Status',
    'required', 
[   'required' => 'Status Harus diisi',
    ]);

    if ($this->form_validation->run() != true) {
        $this->load->view('view-form-matakuliah');
    } else {
       $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks'),
            'status' => $this->input->post('status'),
       ];
    $this->load->view('view-data-matakuliah', $data);
    }
 }
}