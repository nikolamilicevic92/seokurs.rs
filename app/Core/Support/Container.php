<?php

namespace Core\Support;

/**
 * This class alows arrays to be accessed like objects.
 */

class Container
{
  
  private $data;


  public function __construct($array)
  {
    $this->data = $array;
  }


  public function __get($key)
  {
    return $this->data[$key];
  }


  public function __set($key, $value)
  {
    $this->data[$key] = $value;
  }
}