
<?php 

class ContentController extends BaseController {

	/**
	* Homepage 
	*
	*/
	public function index() {
		return View::make('hello');
	}

	/**
	* Ajax request // Get  
	*
	*/ 
	public function listEvents() {
		CalendarEvents::getEventList();
	}

	/**
	* Insert Record 
	*
	*/ 
	public function insertRecord() {

		// I am deleting all record when submit 
		// 
		//
		//
		$status = CalendarEvents::insertRecord(); 

		if ($status) {
			return Redirect::to('/')
								->with('message',$status)
								->with('authenticated_message', "Succesfully saved");
				
		}
		else {

			return Redirect::to('/')
								->with('message',$status)
								->with('authenticated_message', "Error");
		}

	}

	public function deleteRecord() {
		
		CalendarEvents::deleteRecord();

		return Redirect::to('/');

	}
}