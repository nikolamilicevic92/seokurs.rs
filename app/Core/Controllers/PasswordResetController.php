<?php

namespace Core\Controllers;

use Core\Controllers\BaseController;
use Core\Router\Request;
use Core\Support\Session;
use Core\Support\Validator;
use Core\Support\Mailer;
use Core\Models\User;
use Models\Page;

/**
 * This class handles user reigstration.
 */

class PasswordResetController extends BaseController
{

  private $data = [
    'errors'   => [], 
    'success'  => [],
    'email'    => '',
    'password' => '',
    'confirm'  => ''
  ];

  /**
   * @method GET
   * 
   * Rendering password-reset page. URI: PASSWORD_RESET_URI/:token
   */
  
  public function index()
  {
    $this->render('auth.password-reset', array_merge([
        'page' => Page::one(['page_name' => 'password-reset'])
      ],
      $this->data
    ));
  }


  /**
   * Storing the new password temporary inside session and 
   * mailing the user link for completing the proccess.
   * 
   * @var Request request
   * 
   * @return void
   */

  public function reset(Request $request)
  {
    $this->data = array_merge($this->data, $request->body->toArray());

    if($user = User::one(['email' => $request->body->email])) {

      $this->validate($request->body);

      $hash = passwordHash($request->body->password);
      
      $token = randomSecureToken();

      $this->storePasswordResetData($request->body->email, $hash, $token);
      
      $this->mailPasswordResetToken($request->body->email, $token);

      $this
        ->success('Pratite link poslat na vašu email adresu da potvrdite promenu lozinke')
        ->toPage();

    } else {

      $this->data['email'] = '';

      $this
        ->error('Nije pronađen nalog sa datim email-om')
        ->toPage();
    }
  }


  /**
   * Completes the password reset proccess by asserting that token
   * received via URI matches the one previously stored in session.
   * 
   * @var string token
   * 
   * @return void
   */

  public function token($token)
  {
    if(Session::get('password_reset_token') === $token) {

      User::where(Session::get('password_reset_conditions'))
        ->updateWith(Session::get('password_reset_data'));

      Session::set('password_reset_token', null);
      Session::set('password_reset_conditions', null);
      Session::set('password_reset_data', null);

      $this
        ->success('Lozinka uspešno resetovana')
        ->redirect(LOGIN_URI, $this->data);

    } else {

      $this
        ->error('Sesija koja je započela proces je različita od trenutne')
        ->toPage();
    }
  }


  /**
   * Validates form data, pupulates errors data and redirects
   * back to the login page if any input field is invalid.
   * 
   * @var array body
   * 
   * @return void
   */

  private function validate($body)
  {
    if(!Validator::isEmail($body->email)) {
      $this->error('Email nije u ispravnom formatu');
      $this->data['email'] = '';
    }
    if(!Validator::isPassword($body->password)) {
      $this->error('Lozinka mora imati najmanje 8 karaktera, jedno malo, veliko slovo i broj');
      $this->data['password'] = '';
      $this->data['confirm'] = '';
    }
    if(!Validator::isEqual($body->password, $body->confirm)) {
      $this->error('Lozinke se ne poklapaju');
      $this->data['confirm'] = '';
    }
    //Back to the password reset page, with the error messages
    if(count($this->data['errors'])) {
      $this->toPage(true);
    } else {
      $this->data['name'] = '';
      $this->data['email'] = '';
      $this->data['password'] = '';
      $this->data['confirm'] = '';
    }
  }


  /**
   * Stores the form data inside the session to be used once
   * the user visits the password reset link.
   * 
   * @var string email
   * @var string hash
   * @var string token
   * 
   * @return void
   */

  private function storePasswordResetData($email, $hash, $token)
  {
    Session::set('password_reset_conditions', ['email' => $email]);
    Session::set('password_reset_data', ['password' => $hash]);
    Session::set('password_reset_token', $token); 
  }


  /**
   * Populating the errors array.
   * 
   * @var string message
   * 
   * @return object this
   */

  private function error($message)
  {
    $this->data['errors'][] = $message;

    return $this;
  }


  /**
   * Populating the success array.
   * 
   * @var string message
   * 
   * @return object this
   */

  private function success($message)
  {
    $this->data['success'][] = $message;

    return $this;
  }


  /**
   * Navigating back to register page with messages in data
   * array being flushed to the page as well.
   */

  private function toPage($flushErrors = false)
  {
    $this->redirect(PASSWORD_RESET_URI, $this->data);
  }


  /**
   * Sends the password reset token at users email address.
   * 
   * @var string address
   * @var string token
   * 
   * @return void
   */

   private function mailPasswordResetToken($address, $token)
   {
    Mailer::send(
      $address, 'Resetovanje lozinke', SITE_URL . PASSWORD_RESET_URI . "/$token"
    );
   }

}