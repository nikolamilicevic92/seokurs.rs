<?php

use Core\Controllers\BaseController;
use Core\Router\Request;
use Models\Video;
use Models\VideoUser;

class VideoController extends BaseController
{


  /**
   * @method GET
   * 
   * Display all resources. URI: /resource
   */

  public function index()
  {
    //
  }


  /**
   * @method GET
   * 
   * Show resource create page. URI: /resource/create
   */

  public function create()
  {
    //
  }


  /**
   * @method GET
   * 
   * Display a single resource. URI: /resource/:id
   */

  public function show($id)
  {
    if(user()->status('purchased', 'admin')) {
      $directory = ROOT_DIR . 'storage/uploads/protected/';
      readfile($directory . str_replace('video/', '', $id));
    } else {
      $this->redirect('/seo-kurs');
    }
  }


  /**
   * @method GET
   * 
   * Show page for editing resource. URI: /resource/:id/edit
   */

  public function edit($id)
  {
    $video = Video::one($id);

    $this->render('pages.admin.video', [
      'video' => $video,
      'page' => toObject([
        'page_name' => 'video-edit',
        'title' => $video->title,
        'keywords' => '',
        'description' => ''
      ])
    ]);
  }


  /**
   * @method POST
   * 
   * Store new resource. URI: /resource
   */

  public function store(Request $request)
  {
    $directory = 'storage/uploads/protected';
    $path = $request->file('video')->uploadTo($directory);
    $virtualPath = 'video/' . str_replace("$directory/", '', $path);
    $request->body->source = $virtualPath;

    Video::store($request->body->toArray());

    $this->redirect('/seo-kurs');
  }


  /**
   * @method PUT|PATCH
   * 
   * Update a specific resource. URI: /resource/:id
   */

  public function update(Request $request, $id)
  {
    $directory = 'storage/uploads/protected/';

    //If new recording is uploaded we replace the old one
    if($recording = $request->file('video')) {

      unlink($directory . str_replace('video/', '', Video::one($id)->source));

      $pathToVideo = $recording->uploadTo($directory);
      $virtualPath = 'video/' . str_replace("$directory", '', $pathToVideo);
      $request->body->source = $virtualPath;
    }

    Video::where($id)->updateWith($request->body->pop('video')->toArray());

    dump($request->body->toArray());

    // $this->redirect('/video/' . $id . '/edit');
  }


  /**
   * @method DELETE
   * 
   * Delete a specific resource. URI: /resource/:id
   */

  public function destroy($id)
  {
    $video = Video::one($id);

    $directory = ROOT_DIR . 'storage/uploads/protected/';

    unlink($directory . str_replace('video/', '', $video->source));

    //Deleting records of video being watched by users
    VideoUser::where(['id_video' => $id])->delete();
    //Deleting the video
    Video::where($id)->delete();
    //Request is made via AJAX, so no redirecting here
  }
  
}