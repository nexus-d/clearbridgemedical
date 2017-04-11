<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Email extends CORE_Controller {
    function __construct() {
        parent::__construct('');
    }
    public function index() {
    }
  
    function send(){
     




            $content="hello world";
                $this->load->library('email');
                $email_setting  = array('mailtype'=>'html');
                $this->email->initialize($email_setting);
                $this->email->from('denis.insightmedica@gmail.com', 'Denis Gutierrez');
                $this->email->to('denis.insightmedica@gmail.com');
                //$this->email->cc('another@another-example.com');
                //$this->email->bcc('them@their-example.com');
                $this->email->subject('Request for Appointment ');
                $this->email->message('$content');
                //$this->email->set_mailtype('html');
                if($this->email->send()){
                
                    $response['title']='Sent';
                    $response['stat']='success';
                    $response['msg']='Email successfully sent.';
                    
                    echo json_encode($response);
                }
              
        }
   
}
