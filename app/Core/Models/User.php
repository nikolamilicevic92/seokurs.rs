<?php

namespace Core\Models;

use Core\Models\BaseModel;

/**
 * The base user class for handling authentication.
 */

class User extends BaseModel 
{
  public static $id = 'id';
  public static $table = 'user';
}