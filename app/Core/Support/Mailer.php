<?php

namespace Core\Support;

use Core\Support\PHPMailer\PHPMailer;
use Core\Support\PHPMailer\Exception;

/**
 * This class is used for sending emails.
 */

class Mailer
{

  public static function send($data, $noInfo = true)
  {
    if($noInfo) {
      ob_start();
      self::_send($data);
      ob_end_clean();
    } else {
      self::_send($data);
    }
  }

  private static function _send($data)
  {
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = CONTACT_EMAIL_SERVER;                      // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = CONTACT_EMAIL;                 // SMTP username
        $mail->Password = CONTACT_EMAIL_PASSWORD;                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = CONTACT_EMAIL_SERVER_PORT;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($data['from']);
        $mail->addAddress($data['to']);     // Add a recipient
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        // $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $data['subject'];
        $mail->Body    = $data['body'];
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
  }
}