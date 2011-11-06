<?php
class Main extends CI_Controller{
    
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
         $this -> load -> view('main');
		 // $this -> load -> view('footer');
    }
    }
?>