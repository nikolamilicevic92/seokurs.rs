<?php 

use Core\Controllers\BaseController;
use Core\Router\Request;
use Models\CustomField;

class CustomFieldsController extends BaseController
{

	/**
	 * Updating custom fields. Intended for multiple fields at once, so URI
	 * is not /custom-field/:id, it's /custom-field with id-s in the body.
	 * 
	 * @method PUT
	 */

	public function update(Request $request)
	{
		foreach($request->body->toArray() as $id => $value) {

			CustomField::where($id)
								 ->update(['value'])
								 ->with([$value])
			;
		}
	}


	/**
	 * Creating new custom field.
	 * 
	 * @method POST
	 */

	public function store(Request $request)
	{
		CustomField::store($request->body->toArray());

		$this->back();
	}


	/**
	 * Deleting custom field.
	 * 
	 * @method DELETE
	 */

	public function destroy($id)
	{
		CustomField::where($id)->delete();

		$this->back();
	}

}