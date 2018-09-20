<?php 

use Core\Controllers\BaseController;
use Core\Router\Request;
use Models\Page;
use Models\Video;
use Models\Test;
use Models\Section;
use Models\CustomField;
use Models\Blog;

class SeoKursController extends BaseController
{
	
	protected $viewPrefix = 'pages.client.';

	
	public function index()
	{
		if(user()->status('purchased')) {
			$this->showFullCoursePage();
		} else {
			$data = [
				'page' => Page::one(['page_name' => 'seo-kurs']),
				'cf'   => CustomField::findByPage('seo-kurs'),
				'scripts' => ['client/seo-kurs'],
				'editable' => '',
				'description' => Blog::one(['category' => 'seo_kurs_opis'])
			];
			if(user()->isAdmin) {
				$data['editable'] = 'contenteditable=true';
				$data['scripts'][] = 'admin/custom-field-updater';
				$data['scripts'][] = 'core/rich-text-editor';
			}
			$this->render('seo-kurs', $data);
		}
	}


	private function showFullCoursePage()
	{	
		$videos = Video::each()
			->join('section')
			->get(['video.id', 'video.title', 'source', 'duration', 'id_section', 'section.title|section']);

		$tests = Test::each()
			->join('section')
			->get(['test.id', 'test.title', 'test.duration', 'id_section', 'section.title|section']);

		$sections = Section::all();

		$videosWatched = Video::watchedBy(user()->id);

		$testsDone = Test::doneBy(user()->id);

		foreach($sections as &$section) {
			$section->videos = [];
			foreach($videos as $video) {
				if($section->id === $video->id_section) {
					$video->watched = $this->isVideoWatched($video, $videosWatched);
					$video->duration = $this->parseVideoDuration($video);
					$section->videos[] = $video;
				}
			}
			$section->tests = [];
			foreach($tests as $test) {
				if($section->id === $test->id_section) {
					$test->done = $this->isTestDone($test, $testsDone);
					$section->tests[] = $test;
				}
			}
		}

		$data = [
			'page' => Page::one(['page_name' => 'seo-kurs']),
			'sections' => $sections,
			'cf' => CustomField::findByPage('seo-kurs'),
			'scripts' => ['client/seo-kurs-full'],
			'editable' => '',
			'description' => Blog::one(['category' => 'seo_kurs_opis'])
		];
		if(user()->isAdmin) {
			$data['editable'] = 'contenteditable=true';
			$data['scripts'][] = 'admin/custom-field-updater';
			$data['scripts'][] = 'core/rich-text-editor';
			$data['scripts'][] = 'admin/seo-kurs-full';
		}

    $this->render('seo-kurs-full', $data);
	}


	/**
	 * This method returns a string that will be used in element's class value.
	 * 
	 * @var array watched
	 * @var object video
	 * 
	 * @return string class
	 */

	private function isVideoWatched($video, $watched)
	{
		foreach($watched as $single) {
      if($video->id === $single->id) {
        return ' watched';
      }
    }
    return '';
	}
	

	/**
	 * Parses video duration from seconds to min:sec string format.
	 * 
	 * @var object video
	 * 
	 * @return string time
	 */

	private function parseVideoDuration($video)
	{
		$time = intval($video->duration);
    $minutes = intval($time / 60);
    $seconds = $time % 60;
    
    if($minutes < 10) $minutes = '0'. $minutes;
    if($seconds < 10) $seconds = '0'. $seconds;

    return $minutes .':'. $seconds;
	}


	/**
	 * This method returns a string that will be used in element's class value.
	 * 
	 * @var array testsDone
	 * @var object test
	 * 
	 * @return string class
	 */

	private function isTestDone($test, $testsDone) 
	{
    foreach($testsDone as $single) {
      if($test->id === $single->id) {
        return ' done';
      }
    }
    return '';
	}
	

	/**
	 * Updating the description at the bottom of the page.
	 * 
	 * @method PUT
	 */

	public function update(Request $request)
	{
		Blog::where($request->body->id)
				->update(['content'])
				->with([$request->body->content]);

		$this->redirect('/seo-kurs');
	}
}