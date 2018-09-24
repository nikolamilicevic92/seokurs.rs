<?php 

use Core\Controllers\BaseController;
use Core\Router\Request;
use Core\Support\Mailer;

class ContactController extends BaseController
{


  public function index(Request $request) 
  {
    Mailer::send([
      'to' => CONTACT_EMAIL,
      'from' => $request->body->from,
      'subject' => $request->body->subject,
      'body' => $this->getMailBody($request->body->toArray())
    ]);
    
    $this->json(['csrf' => Core\Support\Session::get('csrf')]);
  }


	private function getMailBody($input) 
	{
    $body = '';
    foreach($input as $key => $value) {
      if($key !== 'subject' && $key !== 'from') {
        $key = ucfirst(str_replace('_', ' ', $key));
        $body .= "$key\n$value\n\n";
      }
    }
    return $body === '' ? 'No email body' : $body;
  }
}