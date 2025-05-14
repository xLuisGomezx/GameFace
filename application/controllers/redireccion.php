<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class redireccion extends CI_Controller
{
    public function inicio()
    {
        $this->load->view('header');
        $this->load->view('index');
        $this->load->view('footer');
    }
    public function torneos()
    {
        $this->load->view('header');
        $this->load->view('torneos');
        $this->load->view('footer');
    }
    public function login()
    {
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }
    public function equipo()
    {
        $this->load->view('header');
        $this->load->view('equipo');
        $this->load->view('footer');
    }
}