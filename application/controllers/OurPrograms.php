<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OurPrograms extends CORE_Controller
{

    function __construct() {
        parent::__construct('');



    }



  public function index() {
        $data['main_view_css_files']=$this->load->view('files/templates/main_view_css_files','',TRUE);
        $data['main_view_js_files']=$this->load->view('files/templates/main_view_js_files','',TRUE);
        $data['loading']=$this->load->view('files/templates/loading','',TRUE);
        $data['header']=$this->load->view('files/templates/header','',TRUE);
        $data['footer']=$this->load->view('files/templates/footer','',TRUE);
        $data['gcse_modal']=$this->load->view('files/templates/gcse_modal','',TRUE);
        $data['title']='Our Programs | Clearbridge Medical Centre';
    $this->load->view('files/pages/our_programs',$data);
    }





 




}
