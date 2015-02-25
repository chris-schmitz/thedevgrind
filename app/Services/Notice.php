<?php namespace Grinder\Services;

class Notice {
    
    public $type;
    public $data;

    /**
     * Create a new Notice.
     *
     * A notice object is used to pass messages to the views
     * to be viewed by the user. This data should be stuff
     * like error/success/info messages to be flashed.
     */
    public function __construct($type, $data){
        //ToDo: Figure out how we want to pass back notice data.
        // Since we're going to go all php for now, pass it via
        // the session var by using Flash data.
        // http://laravel.com/docs/5.0/session#flash-data
        $this->type = $type;
        $this->data = $data;
    }
}
