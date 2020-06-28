<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title']='Home';
		$data['view_page']='homepage';
		$this->load->view('site',$data);
	}
	public function About()
	{
		$data['title']='About';
		$data['view_page']='about_us';
		$this->load->view('site',$data);
	}
	public function Pricing()
	{
		$data['title']='Pricing';
		$data['view_page']='pricing';
		$this->load->view('site',$data);
	}
	public function Contact()
	{
		$data['title']='Contact';
		$data['view_page']='contact_us';
		$this->load->view('site',$data);
	}
}
