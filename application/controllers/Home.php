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

	
	public function success()
	{
		$data['title'] = 'Message sent | AEY';
		$data ['view_page'] = 'success_page';

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
				redirect('home');
			}	
		
	}


	public function sendcontactmail()
	{
		//$to = "info@finsys-group.com";
		//$from = "comms@finsys-group.com";
		//$config['protocol'] = 'smtp';
		//$config['smtp_host'] = 'finsys-group.com';
		//$config['smtp_port'] = '465';
		//$config['smtp_crypto'] = 'ssl';
				
		$from = 'comms@finsys-group.com';
		$to='info@finsys-group.com';
		
		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$mobile = $this->input->post("mobile");
		$text = $this->input->post("message");		

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'finsys-group.com';
		$config['smtp_port'] = '465';
		$config['smtp_user'] = 'comms@finsys-group.com';
		$config['smtp_pass'] = 'D%bEPUE523yR';
		$config['smtp_crypto'] = 'ssl';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$headers = 'MIME-Version: 1.0' . "\r\n";
		//$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->set_mailtype("html");
		$this->email->from($email);
		$this->email->to($to);
		$this->email->message ('<table style="width:100%">
        <tr>
            <td>User Name: ' . $name . '</td>
        </tr>
        <tr><td>User Email: ' . $email . '</td></tr>
        <tr><td>User Phonenumber: ' . $mobile . '</td></tr>
        <tr><td>Message: ' . $text . '</td></tr>
        
    </table>');


		try{
			$this->email->send();
			$message = 'Email Sent, We will be in touch ASAP.';
			//if the email is sent successfully the client's information is saved in the database
			$this->contact_model->add_contact();
			$data = array(
				'message' => $message
			);
			redirect('success');
		} catch (Exception $e) {
			$message = 'Email not sent! Please try again.';
			$data = array(
				'message' => $message
			);
		
		}


	}

}
