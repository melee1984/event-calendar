<?php 

class CalendarEvents extends Eloquent {
	
    protected $table = 'tbl_calendar_event';
    public $timestamps = false;

    /*
    * Query 
    *
    */
    public static function getEvents(){ 

        // Other way around to get data from the database/
        // $sql = "select * from tbl_calendar_events";
        // $rs = DB::select($sql);
        // return $rs;

        // This will filter the date when displaying it to database/
        // But right now we just need to display all and put it to the calendar 
        // Just for exam purposes. 

        
        // I am using elequent to display record from the database

        return CalendarEvents::all();
    }

    /*
    * Get Events List and return via json 
    *
    */
    public static function getEventList(){
		  
        $input = Input::all();
        $data = array();    

        $rs = static::getEvents();
        $array_list = array();
        foreach($rs as $list) {

            $array_list[] = array(
                                "title" => $list->title, 
                                "start" => date('Y-m-d', strtotime($list->date_from)),  
                                "end" => date('Y-m-d', strtotime($list->date_to))
                                );

            // $array_list = array('title'=>'Helloworld', 'start'=>'2018-7-1');
        
        }

        // I need to use this to push inside the array instead of array_push due to the PHP Limitation// 

        $data = $array_list;

        die(json_encode($data));

	}


    /*
    * Insert Record
    *
    */
    public static function insertRecord() {

        $input = Input::all();

        $rs = new CalendarEvents;

        $rs->title = $input['txtEventTitle'];
        $rs->date_from = date('Y-m-d', strtotime($input['txtEventTitleFrom']));
        $rs->date_to = date('Y-m-d', strtotime($input['txtEventTitleTo']));
        $status = $rs->save();

        if ($status) {
            // Do necessary things 
        }

        return $status;
    }

    /*
    * Delete Record
    *
    */
    public static function deleteRecord() {

        // CalendarEvents::all()->delete();
        CalendarEvents::truncate();
    }




}