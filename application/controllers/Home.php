<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model(['MdlDonasi']);
    }

    public function sorting() {
        
        $get_url = $this->uri->rsegment(1);

        if($get_url == 'home') {
            $masa_donasi = $this->MdlDonasi->getDonasi('data_donasi')->result();
        }

        date_default_timezone_set("Asia/Bangkok");
    
        foreach($masa_donasi as $item) {
            
            $dateNow = date('Y-m-d H:m:s');

            $masa_donasi_item = $item->masa_donasi;
            $selisih = strtotime($masa_donasi_item) - strtotime($dateNow);

            $masa_aktif = $selisih/(60*60*24);
            $dataUpdate = array(

                'masa_aktif' => $masa_aktif
            
            );       
        
            return $this->MdlDonasi->masaAktif($dataUpdate, 'data_donasi', $item->id_donasi);
     
        }
    }

    public function index(){
        $this->sorting();

        $getDonasi = $this->MdlDonasi->getDonasi('data_donasi')->result();
        $data['donasi'] = $getDonasi;

        $this->load->view('home', $data);
    }

}

?>