<?php 

use Core\Controllers\BaseController;
use Core\Router\Request;
use Models\Page;
use Models\CustomField;
use Models\SeoOptimizacija;
use Models\Partner;


class PagesController extends BaseController
{

	protected $viewPrefix = 'pages.client.';


	public function index()
	{
		$data = [
			'page' => Page::one(['page_name' => 'pocetna']),
			'cf'   => CustomField::findByPage('pocetna'),
			'editable' => user()->isAdmin ? 'contenteditable=true' : '',
			'scripts' => ['client/pocetna', 'client/o-nama']
		];

		if(user()->isAdmin) $data['scripts'][] = 'admin/custom-field-updater';
		
		$this->render('pocetna', $data);
	}


	public function politikaPrivatnosti()
	{
		$this->render('politika-privatnosti', [
			'page' => toObject([
				'page_name' => 'politika-privatnosti',
				'title' => 'Politika privatnosti',
				'keywords' => '',
				'description' => ''
			])
		]);
	}


	public function pravilaKoriscenja()
	{
		$this->render('pravila-koriscenja', [
			'page' => toObject([
				'page_name' => 'pravila-koriscenja',
				'title' => 'Pravila koriscenja',
				'keywords' => '',
				'description' => ''
			])
		]);
	}


	public function konsultacije()
	{
		$this->render('konsultacije', [
			'page' => Page::one(['page_name' => 'konsultacije'])
		]);
	}


	public function oNama()
	{
		$data = [
			'page' => Page::one(['page_name' => 'o-nama']),
			'cf'   => CustomField::findByPage('o-nama'),
			'editable' => user()->isAdmin ? 'contenteditable=true' : '',
			'scripts' => ['client/o-nama']
		];

		if(user()->isAdmin) $data['scripts'][] = 'admin/custom-field-updater';
		
		$this->render('o-nama', $data);
	}


	public function kontakt()
	{
		$this->render('kontakt', [
			'page' => Page::one(['page_name' => 'kontakt']),
			'scripts' => ['client/kontakt']
		]);
	}


	public function pages()
	{
		$this->viewPrefix = 'pages.admin.';

		$this->render('pages', [
			'page' => toObject([
				'page_name' => 'pages',
				'title' => 'Editovanje stranica',
				'keywords' => '',
				'description' => ''
			]),
			'pages' => Page::all(),
			'scripts' => ['admin/pages']
		]);

		$this->viewPrefix = 'pages.client.';
	}
	

	/**
	 * Updates meta title, keywords and description of provided pages.
	 * 
	 * @method PUT
	 */

	public function update(Request $request)
	{
		foreach($request->body->toArray() as $id => $data) {
			Page::where($id)
					->update(['title', 'keywords', 'description'])
					->with(explode('||', $data));
		}
	}
}