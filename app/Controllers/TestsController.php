<?php

use Core\Controllers\BaseController;
use Core\Router\Request;
use Models\Test;
use Models\TestUser;
use Models\Question;
use Models\Answer;
use Models\Video;
use Models\VideoUser;

class TestsController extends BaseController
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
    //If someone is manualy trying to access nonexistant video we go back
    if(!$test = Test::one($id)) {
      $this->back();
    } else {
      //If user is accessing test manualy via url, we have to check whether
      //he watched all videos. 
      //Fetching videos that have to be watched in order to do this test
      $videos = Video::where(['id_section' => $test->id_section])
                     ->get(['id']);
      //Testing whether each of required videos had been watched by user
      foreach($videos as $video) {
        if(!VideoUser::exists(['id_user' => user()->id, 'id_video' => $video->id])) {
          $this->back();
          die;
        }
      }
    }
    //Checking whether test is already done
    if(TestUser::exists(['id_test' => $id, 'id_user' => user()->id])) {
      //Test already done, user should not be here, sending false data
      //will instruct the page to show 'Test already done' message.
      $data = false;
    } else {
      $questions = Question::where(['id_test' => $id])
                           ->orderBy('id desc')
                           ->get();

      foreach($questions as &$question) {
        $question->answers = Answer::where(['id_question' => $question->id])
                                   ->get();
      }
      $data = ['test_data' => ['test' => $test, 'questions' => $questions]];
    }
    $this->render('pages.client.test', $data);
  }


  /**
   * @method GET
   * 
   * Show page for editing resource. URI: /resource/:id/edit
   */

  public function edit($id)
  {
    $test = Test::one($id);
    $test->questions = Question::where(['id_test' => $id])->get();

    foreach($test->questions as &$question) {
      $question->answers = Answer::where(['id_question' => $question->id])->get();
    }

    $this->render('pages.admin.test', [
      'test' => $test
    ]);
  }


  /**
   * @method POST
   * 
   * Store new resource. URI: /resource
   */

  public function store(Request $request)
  {
    Test::store($request->body->toArray());

    $this->redirect('/seo-kurs');
  }


  /**
   * @method PUT|PATCH
   * 
   * Update a specific resource. URI: /resource/:id
   */

  public function update(Request $request, $id)
  {
    Test::where($id)->updateWith($request->body->toArray());

    $this->json(['csrf' => Core\Support\Session::get('csrf')]);
  }


  /**
   * @method DELETE
   * 
   * Delete a specific resource. URI: /resource/:id
   */

  public function destroy($id)
  {
    $questions = Question::where(['id_test' => $id])->get(['id']);

    foreach($questions as $question) {
      Answer::where(['id_question' => $question->id])->delete();
    }

    Question::where(['id_test' => $id])->delete();

    Test::where($id)->delete();

    $this->redirect('/seo-kurs');
  }
  
}