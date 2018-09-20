<?php

use Core\Controllers\BaseController;
use Core\Router\Request;
use Models\Page;
use Models\Portfolio;

class PortfolioController extends BaseController
{
  protected $viewPrefix = 'portfolio.';


  /**
   * @method GET
   * 
   * Display all resources. URI: /resource
   */

  public function index()
  {
    $this->render('index', [
      'page' => Page::one(['page_name' => 'portfolio']),
      'portfolios' => Portfolio::each()->get(
        ['title', 'thumbnail', 'platform', 'description', 'url_title']
       )
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
        'page_name' => 'create-blog',
        'keywords' => '',
        'description' => '',
        'title' => 'Kreiranje bloga'
      ]),
      'scripts' => ['core/rich-text-editor']
    ]);
  }


  /**
   * @method GET
   * 
   * Display a single resource. URI: /resource/:id
   */

  public function show($id)
  {
    if($portfolio = Portfolio::one(['url_title' => $id])) {
      $this->render('single', [
        'page' => toObject([
          'page_name' => 'portfolio-single',
          'title' => $portfolio->title,
          'keywords' => $portfolio->meta_keywords,
          'description' => $portfolio->meta_description
        ]),
        'portfolio' => $portfolio
      ]);
    } else {
      $this->status(404)->end('Portfolio nije pronađen');
    }
  }


  /**
   * @method GET
   * 
   * Show page for editing resource. URI: /resource/:id/edit
   */

  public function edit($id)
  {
    if($portfolio = Portfolio::one($id)) {
      $this->render('edit', [
        'page' => toObject([
          'page_name' => 'portfolio-single',
          'title' => $portfolio->title,
          'keywords' => '',
          'description' => ''
        ]),
        'scripts' => ['core/rich-text-editor'],
        'portfolio' => $portfolio
      ]);
    } else {
      $this->status(404)->end('Portfolio nije pronađen');
    }
  }


  /**
   * @method POST
   * 
   * Store new resource. URI: /resource
   */

  public function store(Request $request)
  {
    $body = $request->body;

    $body->thumbnail = $request->file('thumbnail')->uploadTo('storage/uploads/public');
    $body->analytics = $request->file('analytics')->uploadTo('storage/uploads/public');
    $body->url_title = str_replace(' ', '-', $body->title);

    Portfolio::store($body->toArray());

    $this->redirect('/portfolio/' . $body->url_title);
  }


  /**
   * @method PUT|PATCH
   * 
   * Update a specific resource. URI: /resource/:id
   */

  public function update(Request $request, $id)
  {
    $body = $request->body;
    $portfolio = Portfolio::one($id);

    if($thumbnail = $request->file('thumbnail')) {
      //Deleting previous thumbnail
      unlink(ROOT_DIR . $portfolio->thumbnail);
      $body->thumbnail = $thumbnail->uploadTo('storage/uploads/public');
    }
    if($analytics = $request->file('analytics')) {
      //Deleting previous analytics image
      unlink(ROOT_DIR . $portfolio->analytics);
      $body->analytics = $analytics->uploadTo('storage/uploads/public');
    }
    
    $body->url_title = str_replace(' ', '-', $body->title);

    Portfolio::where($id)->updateWith($body->toArray());

    $this->redirect('/portfolio/' . $body->url_title);
  }


  /**
   * @method DELETE
   * 
   * Delete a specific resource. URI: /resource/:id
   */

  public function destroy($id)
  {
    $portfolio = Portfolio::where($id)->get(['thumbnail', 'analytics'])[0];

    unlink(ROOT_DIR . $portfolio->thumbnail);
    unlink(ROOT_DIR . $portfolio->analytics);

    Portfolio::where($id)->delete();

    $this->redirect('/portfolio');
  }
  
}