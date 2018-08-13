<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function index()
	{
            echo "Staff";
	}
        
        public function lookup($staff_name)
        {
            echo $staff_name;
        }
}
