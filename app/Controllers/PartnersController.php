<?php

use Core\Controllers\BaseController;
use Core\Router\Request;
use Models\Page;
use Models\Partner;

class PartnersController extends BaseController
{
  protected $viewPrefix = 'partners.';


  /**
   * @method GET
   * 
   * Display all resources. URI: /resource
   */

  public function index()
  {
    $this->render('index', [
			'page' => Page::one(['page_name' => 'nasi-partneri']),
			'partners' => Partner::all()
		]);
  }


  /**
   * @method GET
   * 
   * Show resource create page. URI: /resource/create
   */

  public function create()
  {
    $this->render('create', [
      'page' => toObject([
        'page_name' => 'nasi-partneri-create',
        'title' => 'Dodavanje partnera',
        'keywords' => '',
        'description' => ''
      ])
    ]);
  }


  /**
   * @method GET
   * 
   * Display a single resource. URI: /resource/:id
   */

  public function show($id)
  {
    $partner = Partner::one($id);

    $this->render('single', [
      'page' => toObject([
        'page_name' => 'nasi-partneri-single',
        'title' => $partner->name,
        'keywords' => '',
        'description' => ''
      ]),
      'partner' => $partner  
    ]);
  }


  /**
   * @method GET
   * 
   * Show page for editing resource. URI: /resource/:id/edit
   */

  public function edit($id)
  {
    $partner = Partner::one($id);

    $this->render('edit', [
      'page' => toObject([
        'page_name' => 'nasi-partneri-edit',
        'title' => $partner->name,
        'keywords' => '',
        'description' => ''
      ]),
      'partner' => $partner
    ]);
  }


  /**
   * @method POST
   * 
   * Store new resource. URI: /resource
   */

  public function store(Request $request)
  {
    $body = $request->body;

    $body->logo = $request->file('logo')->uploadTo('storage/uploads/public');

    Partner::store($body->toArray());

    $this->redirect('/nasi-partneri');
  }


  /**
   * @method PUT|PATCH
   * 
   * Update a specific resource. URI: /resource/:id
   */

  public function update(Request $request, $id)
  {
    $body = $request->body;

    if($logo = $request->file('logo')) {

      $partner = Partner::one($id);

      unlink(ROOT_DIR . $partner->logo);

      $body->logo = $logo->uploadTo('storage/uploads/public');
    }

    Partner::where($id)->updateWith($body->toArray());

    $this->redirect('/nasi-partneri');
  }


  /**
   * @method DELETE
   * 
   * Delete a specific resource. URI: /resource/:id
   */

  public function destroy($id)
  {
    $partner = Partner::one($id);

    unlink(ROOT_DIR . $partner->logo);

    Partner::where($id)->delete();

    $this->redirect('/nasi-partneri');
  }
  
}