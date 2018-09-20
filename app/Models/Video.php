<?php 

namespace Models;

use Core\Models\BaseModel;

class Video extends BaseModel
{
	public static $table = 'video';
	public static $id = 'id';

	
	public static function watchedBy($id_user) {
		return self::where(['id_user' => $id_user])
							 ->join('video_user')
							 ->on('video.id=id_video')
							 ->get(['video.id']);
	}

}