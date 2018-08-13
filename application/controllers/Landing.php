<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
            $this->load->helper('url');
            $this->load->view('Header');
            $this->load->view("Landing_Home");
            $this->load->view("Footer");
   	}        
}
