<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wellness extends CORE_Controller
{

    function __construct() {
        parent::__construct('');



    }



  public function index() {
    $data['main_view_css_files']=$this->load->view('files/templates/main_view_css_files','',TRUE);
    $data['main_view_js_files']=$this->load->view('files/templates/main_view_js_files','',TRUE);
    $data['loading']=$this->load->view('files/templates/loading','',TRUE);
    $data['navigation_link_3']=$this->load->view('files/templates/navigation_link_3','',TRUE);
    $data['footer']=$this->load->view('files/templates/footer','',TRUE);
    $data['title']='Welness | Clearbridge Medical Centre';
    $this->load->view('files/pages/wellness',$data);
    }





 




}
