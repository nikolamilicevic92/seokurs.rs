<?php

use Core\Controllers\BaseController;
use Core\Router\Request;
use Models\Section;
use Models\Test;
use Models\Video;

class SectionController extends BaseController
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
    Section::store($request->body->toArray());

		$this->redirect('/seo-kurs');
  }


  /**
   * @method PUT|PATCH
   * 
   * Update a specific resource. URI: /resource/:id
   */

  public function update(Request $request, $id)
  {
    Section::where($id)->updateWith($request->body->toArray());
  }


  /**
   * @method DELETE
   * 
   * Delete a specific resource. URI: /resource/:id
   */

  public function destroy($id)
  {
		$condition = ['id_section' => $id];

		if(Test::exists($condition) || Video::exists($condition)) {

			die('Section cannot be deleted');

		} else {
			
			Section::where($id)->delete();

			$this->redirect('/seo-kurs');
    }
  }
  
}