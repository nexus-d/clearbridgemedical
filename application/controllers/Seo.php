<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends CORE_Controller
{

    function __construct() {
        parent::__construct('');



    }



 


    public function sitemap(){
        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view("sitemap");
    }





}
