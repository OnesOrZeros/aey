<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
/**functions enabling one to view the existing pages created
 * functions enabling the header and footer to appear in every web page created
 * functions to show the title of the page currently on display on the tab
 */
	public function index()
	{
		$data['title'] = 'Home | Welcome to AEY';
		$data ['view_page'] = 'homepage';

		$this->load->view('site', $data);
	}

	public function about()
	{
		$data['title'] = 'About Us | AEY';
		$data ['view_page'] = 'about';

		$this->load->view('site', $data);
	}

	public function services()
	{
		$data['title'] = 'Services | AEY';
		$data ['view_page'] = 'services';

		$this->load->view('site', $data);
	}

	/**function to govern the keying-in of the client's contacts and message to request a quotation  */
	public function contacts()
	{
		$data['title'] = 'Contacts | AEY';
		$data ['view_page'] = 'contact_us';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'required');
			$this->form_validation->set_rules('message', 'Message', 'required');


			if($this->form_validation->run() === FALSE){
				$this->load->view('site', $data);	
			}else{
				$this->contact_model->add_contact();
				
				// Set  message
				$this->session->set_flashdata('added_contact', 'You have sent your message successfully');
				redirect('Home');
			}	
		
	}

}
