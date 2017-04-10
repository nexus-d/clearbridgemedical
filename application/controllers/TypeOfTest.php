<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TypeOfTest extends CORE_Controller
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
    $data['title']='Type of Test | Clearbridge Medical Centre';
    $this->load->view('files/pages/type_of_test',$data);
    }



  


  public function loadPageMetabolomicTest() {
    $data['sub_view_css_files']=$this->load->view('files/templates/sub_view_css_files','',TRUE);
    $data['sub_view_js_files']=$this->load->view('files/templates/sub_view_js_files','',TRUE);
    $data['loading']=$this->load->view('files/templates/loading','',TRUE);
    $data['header2']=$this->load->view('files/templates/header2','',TRUE);
    $data['footer2']=$this->load->view('files/templates/footer2','',TRUE);
    $data['gcse_modal']=$this->load->view('files/templates/gcse_modal','',TRUE);
    $data['title']='Metabolomic Test | Clearbridge Medical Center';
    $this->load->view('files/pages/metabolomic_test',$data);
    }


  


 




}
