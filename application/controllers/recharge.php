<?php
class Recharge extends CI_Controller{
    
     function __construct()
    {
         parent :: __construct();
         $this -> load -> helper('html');
		 $this->load->helper('url');
    }
    
     function index()
    {
         $data = array();
         $this -> load -> view('header');
         $this -> load -> view('recharge');
		 // $this -> load -> view('footer');
    }
    }
?>