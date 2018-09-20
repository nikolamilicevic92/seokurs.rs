<?php 

use Core\Controllers\BaseController;
use Core\Router\Request;
use Core\Support\Mailer;

class ContactController extends BaseController
{

	private $myEmail = 'nikolamilicevic92@gmail.com';


	public function index(Request $request) {

    $subject = $request->body->predmet;
    $body = $this->getMailBody($request->body->toArray());
    
		Mailer::send($this->myEmail, $subject, $body);
  }


	private function getMailBody($input) 
	{
    $body = '';
    foreach($input as $key => $value) {
      if($key != 'predmet') {
        $key = ucfirst(str_replace('_', ' ', $key));
        $body .= "$key\n$value\n\n";
      }
    }
    return $body;
  }
}