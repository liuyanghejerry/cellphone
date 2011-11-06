<?php
class Missing extends CI_Controller{
    
     function __construct()
    {
         parent :: __construct();
         $this ->load ->helper('html');
		 $this->load->helper('url');
    }

     function index()
    {
		echo 'error - 404';
    }
	
    }
?>