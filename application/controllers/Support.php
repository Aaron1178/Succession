<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support extends CI_Controller
{

	public function index()
	{
            
	}
        
        public function contact()
        {
            $this->load->helper('url');
            $this->load->view('Header');
            $this->load->view('Footer');
        }
}
