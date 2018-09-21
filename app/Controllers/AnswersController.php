<?php

use Core\Controllers\BaseController;
use Core\Router\Request;
use Models\Answer;

class AnswersController extends BaseController
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
    //
  }


  /**
   * @method GET
   * 
   * Show page for editing resource. URI: /resource/:id/edit
   */

  public function edit($id)
  {
    //
  }


  /**
   * @method POST
   * 
   * Store new resource. URI: /resource
   */

  public function store(Request $request)
  {
    if($request->body->correct) {
      $request->body->correct = true;
    }

    $id_test = $request->body->id_test;

    Answer::store($request->body->pop('id_test')->toArray());

    $this->redirect('/test/' . $id_test . '/edit');
  }


  /**
   * @method PUT|PATCH
   * 
   * Update a specific resource. URI: /resource/:id
   */

  public function update(Request $request, $id)
  {
    Answer::where($id)->updateWith($request->body->toArray());

    $this->json(['csrf' => Core\Support\Session::get('csrf')]);
  }


  /**
   * @method DELETE
   * 
   * Delete a specific resource. URI: /resource/:id
   */

  public function destroy($id)
  {
    Answer::where($id)->delete();

    $this->json(['csrf' => Core\Support\Session::get('csrf')]);
  }
  
}