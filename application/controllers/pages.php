<?php
	class Pages extends CI_Controller{

		public function index()
    {
       $this->load->view('home');
    }


    public function menu()
    {
    	$this->load->view('menu');
    }

     public function music()
    {
    	$this->load->view('music');
    }

    public function jobs()
    {
    	$this->load->view('jobs');
    }

     public function gear()
    {
    	$this->load->view('gear');
    }

     public function cart()
    {
    	$this->load->view('cart');
    }

     public function placeyourorder()
    {
    	$this->load->view('placeyourorder');
    }
	}
?>