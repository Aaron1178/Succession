<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function login()
    {
        $this->load->helper(array('url', 'form'));

        $this->load->library('form_validation');
        $this->load->database();
        
        $this->form_validation->set_rules('empPID', 'Password', 'htmlspecialchars|required|min_length[4]');
        $this->form_validation->set_rules('empPassword', 'Password', 'htmlspecialchars|required|min_length[8]');
                
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view("Login");    
        }
        else
        {
            $userid   = htmlspecialchars($_POST['empPID']);
            $password = htmlspecialchars($_POST['empPassword']);
            
            $query = $this->db->query("SELECT * FROM employees WHERE payrollid = $userid LIMIT 1");
            
            if(!$query)
            {
                echo $this->db->error()["message"];
                redirect("/index.php/");
                exit;
            }
            
            $row = $query->row();
                        
            if(!password_verify($password, $row->employeePassword))
            {
                echo "Password Invalid!";
                redirect("/index.php");
                exit;
            }            
        }
    }        
}
