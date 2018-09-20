<?php

use Core\Controllers\BaseController;
use Core\Router\Request;
use Models\Page;
use Models\Blog;

class BlogController extends BaseController
{

  protected $viewPrefix = 'blog.';


  /**
   * @method GET
   * 
   * Display all resources. URI: /resource
   */

  public function index()
  {
    $this->render('index', [
      'page' => Page::one(['page_name' => 'blog']),
      'blogs' => Blog::where(['category|<>' => 'seo_kurs_opis'])->get([
        'title', 'url_title', 'description', 'thumbnail'
      ])
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
        'title' => 'Kreiranje bloga',
        'keywords' => '',
        'description' => ''
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
    if($blog = Blog::one(['url_title' => $id])) {
      $this->render('single', [
        'page' => toObject([
          'title' => $blog->title,
          'page_name' => 'blog-single',
          'keywords' => $blog->meta_keywords,
          'description' => $blog->meta_description
        ]),
        'blog' => $blog
      ]);
    } else {
      $this->status(404)->end('Blog nije pronađen');
    }
  }


  /**
   * @method GET
   * 
   * Show page for editing resource. URI: /resource/:id/edit
   */

  public function edit($id)
  {
    if($blog = Blog::one($id)) {
      $this->render('edit', [
        'page' => toObject([
          'title' => $blog->title,
          'page_name' => 'blog-edit',
          'keywords' => '',
          'description' => ''
        ]),
        'blog' => $blog,
        'scripts' => ['core/rich-text-editor']
      ]);
    } else {
      $this->status(404)->end('Blog nije pronađen');
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
    $body->url_title = str_replace(' ', '-', $request->body->title);

    Blog::store($body->toArray());

    $this->redirect('/blog/' . $body->url_title);
  }


  /**
   * @method PUT|PATCH
   * 
   * Update a specific resource. URI: /resource/:id
   */

  public function update(Request $request, $id)
  {
    $body = $request->body;

    if($thumbnail = $request->file('thumbnail')) {

      $blog = Blog::where($id)->get(['thumbnail'])[0];

      unlink(ROOT_DIR . $blog->thumbnail);

      $body->thumbnail = $thumbnail->uploadTo('storage/uploads/public');
      
    }

    $body->url_title = str_replace(' ', '-', $body->title);

    Blog::where($id)->updateWith($body->toArray());

    $this->redirect('/blog/' . $body->url_title);
  }


  /**
   * @method DELETE
   * 
   * Delete a specific resource. URI: /resource/:id
   */

  public function destroy($id)
  {
    $blog = Blog::where($id)->get(['thumbnail'])[0];

    unlink(ROOT_DIR . $blog->thumbnail);

    Blog::where($id)->delete();

    $this->redirect('/blog');
  }
  
}