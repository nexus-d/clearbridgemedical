<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Email extends CORE_Controller {
    function __construct() {
        parent::__construct('');
    }
    public function index() {
    }
  
    function sendhmail(){

            $content="hello world";
            $this->load->library('email');
            $email_setting  = array('mailtype'=>'html');
            $this->email->initialize($email_setting);
            $this->email->from('denis.insightmedica@gmail.com', 'Denis Gutierrez');
            $this->email->to('infotechnexus28@gmail.com');
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
            }else{
            $response['title']='Failed';
            $response['stat']='error';
            $response['msg']='Email successfully not sent.';
            echo json_encode($response);
            }

    }



    function sendgmail(){
            $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'denis.insightmedica@gmail.com',
            'smtp_pass' => '!Admin123456',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('denis.insightmedica@gmail.com', 'Denis Gutierrez');
            $this->email->to('infotechnexus28@gmail.com');
            $this->email->subject('Request for Appointment ');
            $this->email->message('Hello World');
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
       
        function test(){

        $this->load->library('email');

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
        // Also, for getting full html you may use the following internal method:
        //$body = $this->email->full_html($subject, $message);

        $result = $this->email
        ->from('denis.insightmedica@gmail.com')
        ->to('infotechnexus28@gmail.com')
        ->subject($subject)
        ->message($body)
        ->send();

        var_dump($result);
        echo '<br />';
        echo $this->email->print_debugger();
        exit;
        }




        public function send_mail()
        {
        require_once(APPPATH.'third_party/phpmailer/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = "denis.insightmedica@gmail.com";  // user email address
        $mail->Password   = "!Admin123456";            // password in GMail
        $mail->SetFrom('denis.insightmedica@gmail.com', 'Denis Gutierrez');  //Who is sending 
        $mail->isHTML(true);
        $mail->Subject    = "Mail Subject";
        $mail->Body      = '
        <html>
        <head>
        <title>Title</title>
        </head>
        <body>
        <h3>Heading</h3>
        <p>Message Body</p><br>
        <p>With Regards</p>
        <p>Your Name</p>
        </body>
        </html>
        ';
        $destino = 'denis.insightmedica@gmail.com'; // Who is addressed the email to
        $mail->AddAddress($destino, "Receiver");
        if(!$mail->Send()) {
        return false;
        } else {
        return true;
        }
        }
}
