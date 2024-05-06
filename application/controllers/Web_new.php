<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Web_new extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('web_new/index',$data);
    }
    public function about()
    {
        $data['judul'] = "Halaman About";
        $this->load->view('web_new/about', $data);
    }
public function hub_kami()
    {
    $data['judul'] = "Halaman Hubungi Kami";
    $this->load->view('web_new/hub_kami', $data);
    }
}