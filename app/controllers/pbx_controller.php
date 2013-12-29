<?php
class PbxController extends AppController {

	var $name = 'Pbx';
	var $uses = array();

	function answer($callType) {
		switch ($callType) {
			case 'phone':
				$this->set('message',
						'<Say>Thank you for calling the Museum of the Modern Snow globe. The museum is currently closed.</Say>'.
						'<Gather numDigits="1" action="/pbx/handlekeys.xml">'.
						'<Say>If you would like to schedule a visit, press one.</Say>'.
						'<Say>If you would like to record a story about a snow globe in the collection, press two.</Say>'.
						'<Say>If you would like the address of the museum, press three.</Say>'.
						'<Say>For all other inquiries, press four.</Say>'.
						'<Say>Press any other key or hang up to end this call</Say>'.
						'</Gather>'.
						'<Say>I did not recieve any digits.</Say>'.
						'<Redirect>/pbx/hangup.xml</Redirect>');
				break;
			case 'sms':
				$this->set('message',
						'<Sms>100% off the price of admission of your next visit to the museum if you mention the code FREE VISIT.</Sms>');
				break;
		}

	}

	function handleKeys() {
		switch ($this->params['form']['Digits']) {
			case '1':
				$this->set('message',
							'<Say>Please leave your contact information and when you would like to visit the museum, at the beep.</Say>'.
							'<Record action="/pbx/hangup.xml" />'.
							'<Say>I did not receive a recording.</Say>'.
							'<Redirect>/pbx/hangup.xml</Redirect>');
				break;
			case '2':
				$this->set('message',
							'<Say>Tell us a story about a snow globe at the beep.</Say>'.
							'<Record action="/pbx/hangup.xml" />'.
							'<Say>I did not receive a recording.</Say>'.
							'<Redirect>/pbx/hangup.xml</Redirect>');
				break;
			case '3':
				$this->set('message',
							'<Say>The address of the museum is 6 Vernon Street, Somerville, Massachussetts, 02145. It is located inside the Vernon Street Studios building at the intersection of Vernon Street and Central Street.</Say>'.
							'<Redirect>/pbx/hangup.xml</Redirect>');
				break;
			case '4':
				$this->set('message',
							'<Say>Please leave your message at the beep.</Say>'.
							'<Record action="/pbx/hangup.xml" />'.
							'<Say>I did not receive a recording.</Say>'.
							'<Redirect>/pbx/hangup.xml</Redirect>');
				break;
			default:
				$this->set('message',
							'<Redirect>/pbx/hangup.xml</Redirect>');
		}
	}

	function hangUp() {
		$this->set('message',
					'<Say>Thank you, goodbye.</Say>'.
					'<Hangup/>');
	}
}
?>