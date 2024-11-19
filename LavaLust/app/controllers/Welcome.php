<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {
	public function index(): void {
		$this->call->view('welcome_page');
	}
	public function contact_page(): void {
		echo 'Contact Page';
	}
}
?>