<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends CORE_Controller
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
    $data['title']='About Us | Clearbridge Medical Centre';
    $this->load->view('files/pages/about_us',$data);
    }





  public function loadPageOverview() {
    $data['sub_view_css_files']=$this->load->view('files/templates/sub_view_css_files','',TRUE);
    $data['sub_view_js_files']=$this->load->view('files/templates/sub_view_js_files','',TRUE);
    $data['loading']=$this->load->view('files/templates/loading','',TRUE);
    $data['navigation_link_2']=$this->load->view('files/templates/navigation_link_2','',TRUE);
    $data['footer']=$this->load->view('files/templates/footer','',TRUE);
    $data['title']='Overview | Clearbridge Medical Centre';
    $this->load->view('files/pages/overview',$data);
    }

 

  public function loadPageMissionVision() {
    $data['sub_view_css_files']=$this->load->view('files/templates/sub_view_css_files','',TRUE);
    $data['sub_view_js_files']=$this->load->view('files/templates/sub_view_js_files','',TRUE);
    $data['loading']=$this->load->view('files/templates/loading','',TRUE);
    $data['navigation_link_2']=$this->load->view('files/templates/navigation_link_2','',TRUE);
    $data['footer']=$this->load->view('files/templates/footer','',TRUE);
    $data['title']='Mission and Vision | Clearbridge Medical Centre';
    $this->load->view('files/pages/mission_vision',$data);
    }

 




}
