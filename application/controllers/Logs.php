<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logs extends CORE_Controller
{

    function __construct() {
        parent::__construct('');

        //$this->validate_session(); //validate session

        $this->load->model(
            array(
                'EAppointment_model',
                 'Enquiry_model'
            )
        );

    }

   

public function eapps(){


                $_m=$this->EAppointment_model;
                $_m->fullname=$this->input->post('fullname',TRUE);
                $_m->email=$this->input->post('email',TRUE);
                $_m->phone=$this->input->post('phone',TRUE);
                $_m->birthdate=$this->input->post('birthdate',TRUE);
                $_m->gender=$this->input->post('gender',TRUE);
                $_m->country=$this->input->post('country',TRUE);
                $_m->message=$this->input->post('message',TRUE);
                $_m->appointment_date=$this->input->post('appointment_date',TRUE);
                $_m->appointment_time=$this->input->post('appointment_time',TRUE);
                //auditing purposes
                $_m->set('date_created','NOW()');
                $_m->save();
                if($_m->status()===TRUE){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Email Has Been Sent!.';
                }else{
                    $response['title']='Error!';
                    $response['stat']='error';
                    $response['msg']='Something went wrong! Please try again.';
                }
                echo json_encode($response);

}

    

    public function enq(){


                    $_m=$this->Enquiry_model;
                    $_m->fullname=$this->input->post('fullname',TRUE);
                    $_m->email=$this->input->post('email',TRUE);
                    $_m->phone=$this->input->post('phone',TRUE);
                    $_m->message=$this->input->post('message',TRUE);
                   
                    //auditing purposes
                    $_m->set('date_created','NOW()');
                    $_m->save();
                    if($_m->status()===TRUE){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Email Has Been Sent!.';
                    }else{
                        $response['title']='Error!';
                        $response['stat']='error';
                        $response['msg']='Something went wrong! Please try again.';
                    }
                    echo json_encode($response);

    }







}
