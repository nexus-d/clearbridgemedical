<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CORE_Controller
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
    $data['title']='Contact Us | Clearbridge Medical Centre';
    $this->load->view('files/pages/contact_us',$data);
    }




  public function loadPageEappointment() {
    $data['sub_view_css_files']=$this->load->view('files/templates/sub_view_css_files','',TRUE);
    $data['sub_view_js_files']=$this->load->view('files/templates/sub_view_js_files','',TRUE);
    $data['loading']=$this->load->view('files/templates/loading','',TRUE);
    $data['header2']=$this->load->view('files/templates/header2','',TRUE);
    $data['footer2']=$this->load->view('files/templates/footer2','',TRUE);
     $data['gcse_modal']=$this->load->view('files/templates/gcse_modal','',TRUE);
    $data['title']='E-Appointment | Clearbridge Medical Centre';
    $this->load->view('files/pages/e_appointment',$data);
    }




  public function loadPageEnquiry() {
    $data['sub_view_css_files']=$this->load->view('files/templates/sub_view_css_files','',TRUE);
    $data['sub_view_js_files']=$this->load->view('files/templates/sub_view_js_files','',TRUE);
    $data['loading']=$this->load->view('files/templates/loading','',TRUE);
    $data['header2']=$this->load->view('files/templates/header2','',TRUE);
    $data['footer2']=$this->load->view('files/templates/footer2','',TRUE);
     $data['gcse_modal']=$this->load->view('files/templates/gcse_modal','',TRUE);
    $data['title']='Enquiry Form | Clearbridge Medical Centre';
    $this->load->view('files/pages/enquiry',$data);
    }



 

  public function loadPageMailingAddress() {
    $data['sub_view_css_files']=$this->load->view('files/templates/sub_view_css_files','',TRUE);
    $data['sub_view_js_files']=$this->load->view('files/templates/sub_view_js_files','',TRUE);
    $data['loading']=$this->load->view('files/templates/loading','',TRUE);
    $data['header2']=$this->load->view('files/templates/header2','',TRUE);
    $data['footer2']=$this->load->view('files/templates/footer2','',TRUE);
     $data['gcse_modal']=$this->load->view('files/templates/gcse_modal','',TRUE);
    $data['title']='Mailing Address | Clearbridge Medical Centre';
    $this->load->view('files/pages/mailing_address',$data);
    }

 public function loadPageOperatingHours() {
    $data['sub_view_css_files']=$this->load->view('files/templates/sub_view_css_files','',TRUE);
    $data['sub_view_js_files']=$this->load->view('files/templates/sub_view_js_files','',TRUE);
    $data['loading']=$this->load->view('files/templates/loading','',TRUE);
    $data['header2']=$this->load->view('files/templates/header2','',TRUE);
    $data['footer2']=$this->load->view('files/templates/footer2','',TRUE);
     $data['gcse_modal']=$this->load->view('files/templates/gcse_modal','',TRUE);
    $data['title']='Operating Hours | Clearbridge Medical Centre';
    $this->load->view('files/pages/operating_hours',$data);
    }





}
