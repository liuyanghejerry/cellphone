<?php
class Wait_for_check extends CI_Controller{
    
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
         $this -> load -> view('wait_for_check');
		 // $this -> load -> view('footer');
    }
    }
?>