<?php
class MessagesController extends AppController {

	var $name = 'Messages';
	var $components = array('RequestHandler','Email');
	var $uses = array();

	var $fromAddress = 'donotreply@museumofthemodernsnowglobe.com';
	var $toAddress = 'contact@museumofthemodernsnowglobe.com';

	function send($messagetype = null) {

		switch($messagetype) {
			case 'quicknote':
				//$this->params['form']['message'];

				$this->Email->from = $this->fromAddress;
				$this->Email->to = $this->toAddress;
				$this->Email->subject = "A message for the museum";
				$this->Email->send($this->params['form']['message']);

				//Print the source of the message somewhere in the body text
				//Message from Contact Us:

				break;

			case 'visitrequest':
				$this->Email->from = $this->fromAddress;
				$this->Email->to = $this->toAddress;
				$this->Email->subject = "Visit request";

				break;

			case 'voicemail':

				break;
		}


		$this->render('thankyou');
	}


}
?>