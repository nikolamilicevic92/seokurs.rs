<?php

use Core\Controllers\BaseController;
use Core\Router\Request;
use Models\Question;
use Models\Answer;

class QuestionsController extends BaseController
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
    Question::store($request->body->toArray());

    $this->redirect('/test/' . $request->body->id_test . '/edit');
  }


  /**
   * @method PUT|PATCH
   * 
   * Update a specific resource. URI: /resource/:id
   */

  public function update(Request $request, $id)
  {
    Question::where($id)->updateWith($request->body->toArray());

    $this->json(['csrf' => Core\Support\Session::get('csrf')]);
  }


  /**
   * @method DELETE
   * 
   * Delete a specific resource. URI: /resource/:id
   */

  public function destroy($id)
  {
    //
  }
  
}