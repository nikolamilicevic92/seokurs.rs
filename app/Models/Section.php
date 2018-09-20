<?php 

namespace Models;

use Core\Models\BaseModel;

class Section extends BaseModel
{
	public static $table = 'section';
	public static $id = 'id';


	public static function titles() {
    $raw = self::all();
    $result = [];
    foreach($raw as $row) {
      $result[] = $row->title;
    }
    return $result;
	}
	
}