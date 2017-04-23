<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Email extends CORE_Controller {
    function __construct() {
        parent::__construct('');
    }
    public function index() {
    }
  
    function sendmail(){

        $subject = 'This is a test';
        $message = '<p>This message has been sent for testing purposes.</p>';

        // Get full html:
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
       
        <title></title>
        <style type="text/css">
        body {
        font-family: Arial, Verdana, Helvetica, sans-serif;
        font-size: 16px;
        }
        </style>
        </head>
        <body>
        ' . $message . '
        </body>
        </html>';



            $content="hello world";
            $this->load->library('email');
            $email_setting  = array('mailtype'=>'html');
            $this->email->initialize($email_setting);
            $this->email->from('denis.insightmedica@gmail.com', 'Denis Gutierrez');
            $this->email->to('infotechnexus28@gmail.com');
            //$this->email->cc('another@another-example.com');
            //$this->email->bcc('them@their-example.com');
            $this->email->subject($subject);
            $this->email->message($body);
            //$this->email->set_mailtype('html');
            if($this->email->send()){

            $response['title']='Sent';
            $response['stat']='success';
            $response['msg']='Email successfully sent.';
            echo json_encode($response);
            }else{
            $response['title']='Failed';
            $response['stat']='error';
            $response['msg']='Email successfully not sent.';
            echo json_encode($response);
            }

    }



    
        



}
