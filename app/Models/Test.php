<?php 

namespace Models;

use Core\Models\BaseModel;

class Test extends BaseModel
{
	public static $table = 'test';
	public static $id = 'id';

	
	public static function doneBy($id_user) {
		return self::where(['id_user' => $id_user])
							 ->join('test_user')
							 ->on('test.id=id_test')
							 ->get(['test.id']);
	}
	
}