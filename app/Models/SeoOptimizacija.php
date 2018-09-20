<?php 

namespace Models;

use Core\Models\BaseModel;

class SeoOptimizacija extends BaseModel
{
	public static $table = 'seo_optimizacija';
	public static $id = 'id';
	

	public static function findGrouped() 
	{
    $data = [
      'on_page_seo'  => [], 
      'off_page_seo' => [],
      'tehnicki_seo' => []
		];
		foreach(self::all() as $single) {
			$data[$single->category][] = $single;
		}
    return $data;
	}
	
}