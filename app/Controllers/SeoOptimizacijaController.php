<?php 

use Core\Controllers\BaseController;
use Core\Router\Request;
use Models\SeoOptimizacija;
use Models\Page;

class SeoOptimizacijaController extends BaseController
{

	/**
	 * Displaying seo-optimizacija page.
	 * 
	 * @method GET
	 */

	public function index()
	{
		$data = [
			//seo-optmizacija misspelled in db, so yea...
			'page' => Page::one(['page_name' => 'seo-optmizacija']),
			'seo' => SeoOptimizacija::findGrouped(),
			'editable' => user()->isAdmin ? 'contenteditable=true' : '',
			'scripts' => ['client/seo-optimizacija']
		];

		if(user()->isAdmin) 
			$data['scripts'][] = 'admin/seo-optimizacija';

		$this->render('pages.client.seo-optimizacija', $data);
	}


	/**
	 * Updating data for page seo-optimizacija.
	 * 
	 * @method PUT
	 */

	public function update(Request $request)
	{
		foreach($request->body->toArray() as $id => $data) {
			SeoOptimizacija::where($id)
										 ->update(['title', 'description'])
										 ->with(explode('||', $data));
		}
	}


	/**
	 * Creating new data for page seo-optimizacija.
	 * 
	 * @method POST
	 */

	public function create(Request $request)
	{
		SeoOptimizacija::store($request->body->toArray());

		$this->redirect('/seo-optimizacija');
	}


	/**
	 * Deleting a single record from page seo-optimizacija.
	 * 
	 * @method DELETE
	 */

	public function destroy($id)
	{
		SeoOptimizacija::where($id)->delete();
	}

}