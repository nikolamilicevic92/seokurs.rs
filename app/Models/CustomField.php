<?php 

namespace Models;

use Core\Models\BaseModel;

class CustomField extends BaseModel
{
	public static $index = 'id';
	public static $table = 'custom_field';


	public static function findByPage($page) {

		$tmp = self::where(['page_name' => $page])
									->join('page')
									->get(['custom_field.id', 'name', 'value']);

    $fields = [];

    foreach($tmp as $row) {
      if(isset($fields[$row->name])) {
        if(isset($fields[$row->name]->name)) {
          $fields[$row->name] = [$fields[$row->name], $row];
        } else {
          $fields[$row->name][] = $row;
        }
      } else {
        $fields[$row->name] = $row;
      }
    }
    return $fields;
  }
}