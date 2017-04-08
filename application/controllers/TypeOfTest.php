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
    $data['navigation_link_1']=$this->load->view('files/templates/navigation_link_1','',TRUE);
    $data['footer']=$this->load->view('files/templates/footer','',TRUE);
    $data['title']='Type of Test | Clearbridge Medical Centre';
    $this->load->view('files/pages/type_of_test',$data);
    }



  


  public function loadPageMetabolomicTest() {
    $data['sub_view_css_files']=$this->load->view('files/templates/sub_view_css_files','',TRUE);
    $data['sub_view_js_files']=$this->load->view('files/templates/sub_view_js_files','',TRUE);
    $data['loading']=$this->load->view('files/templates/loading','',TRUE);
    $data['navigation_link_2']=$this->load->view('files/templates/navigation_link_2','',TRUE);
    $data['footer']=$this->load->view('files/templates/footer','',TRUE);
    $data['title']='Metabolomic Test | Clearbridge Medical Center';
    $this->load->view('files/pages/metabolomic_test',$data);
    }


  


 




}
