<?php

 function dotsToSlashes($string)
 {
   return str_replace('.', '/', $string);
 }

 function csrf()
 {
   return $_SESSION['csrf'];
 }

 function csrfFormField()
 {
   return '<input type="hidden" name="_csrf" value="' . $_SESSION['csrf'] . '">';
 }

 function user()
 {
   return Core\Middleware\AuthMiddleware::getInstance();
 }

 function randomSecureToken($length = 32)
 {
   return bin2hex(random_bytes($length));
 }

 function passwordHash($password)
 {
   return password_hash($password, PASSWORD_DEFAULT);
 }

 function dump($object)
 {
   echo '<pre>';
   var_dump($object);
   echo '</pre>';
 }

function URIToMethod($uri)
{
  if(strpos($uri, '/') === 0) {
    $uri = substr($uri, 1);
  }
  $uri = explode('-', $uri);
  $length = count($uri);
  for($i = 1; $i < $length; $i++) {
    $uri[$i] = ucfirst($uri[$i]);
  }
  return implode('', $uri);
}

function toObject($array)
{
  return new Core\Support\Container($array);
}

//Used to set active class on current menu link
function isActive($uri) 
{
  $uri = '/'. ltrim($uri, '/');
  return $_SERVER['REQUEST_URI'] === $uri ? 'active' : ''; 
}


