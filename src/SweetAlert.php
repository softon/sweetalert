<?php namespace Softon\SweetAlert;


class SweetAlert {

	private $params;

    function __construct()
    {
        $this->params = config('sweetalert');
    }


    
    /**
     * Send Message to SweetAlert2. With full configuration possible.
     * @param  title string
     * @param  text string
     * @param  type string
     * @param  options array
     * @return object
     */
    public function message($title='',$text='',$type='',$options=[])
    {
    	$this->params['title'] = $title;
    	$this->params['text'] = $text;
    	$this->params['type'] = $type;
    	if(isset($options)){
    		$this->params = array_merge($this->params,$options);
    	}

    	
    	session()->flash('sweetalert.json',json_encode($this->params));

    	return $this;
    }


    /**
     * Show a Warning Modal to user
     * @param  string
     * @param  string
     * @param  array
     * @return [type]
     */
    public function warning($title='',$text='',$options=[])
    {
    	return $this->message($title,$text,'warning',$options);
    }

    /**
     * Show Error Modal to user
     * @param  string
     * @param  string
     * @param  array
     * @return [type]
     */
    public function error($title='',$text='',$options=[])
    {
    	return $this->message($title,$text,'error',$options);
    }


    /**
     * Show Success Modal to User
     * @param  string
     * @param  string
     * @param  array
     * @return [type]
     */
    public function success($title='',$text='',$options=[])
    {
    	return $this->message($title,$text,'success',$options);
    }


    /**
     * Show Info Modal to user
     * @param  string
     * @param  string
     * @param  array
     * @return [type]
     */
    public function info($title='',$text='',$options=[])
    {
    	return $this->message($title,$text,'info',$options);
    }


    /**
     * Show a Question Modal to User
     * @param  string
     * @param  string
     * @param  array
     * @return [type]
     */
    public function question($title='',$text='',$options=[])
    {
    	return $this->message($title,$text,'question',$options);
    }


    /**
     * Load a custom set of config before loading the modal
     * @param  array
     * @return [type]
     */
    public function loadConfig($config=[])
    {
    	$this->params = array_merge($this->params,$config);
    	return $this;
    }


    /**
     * AutoClose the Modal after specified milliseconds
     * @param  integer
     * @return [type]
     */
    public function autoclose($time=2000)
    {
    	unset($this->params['timer']);

    	if($time !== false){
    		$this->params['timer'] = (int)$time;
    	}

    	return $this;
    }


    /**
     * Show a Toast Modal to User. Use along with autoclose and position
     * @return [type]
     */
    public function toast()
    {
    	$this->params['toast'] = true;

    	return $this;
    }


    /**
     * Change Button Properties in the Modal. Like Text , Colour and Style
     * @param  string
     * @param  string
     * @param  boolean
     * @param  [type]
     * @return [type]
     */
    public function button($text='OK',$color='#3085d6',$style=true,$class=null)
    {
    	$this->params['confirmButtonText'] = $text;
    	$this->params['confirmButtonColor'] = $color;
    	$this->params['buttonsStyling'] = (bool)$style;
    	if(!is_null($class)){
    		$this->params['confirmButtonClass'] = $class;
    	}

    	return $this;
    }


    /**
     * Change Modal Position  'top', 'top-left', 'top-right', 'center', 
     * 'center-left', 'center-right', 'bottom', 'bottom-left', or 'bottom-right'.
     * @param  string
     * @return [type]
     */
    public function position($value='center')
    {
    	$this->params['position'] = $value;

    	return $this;
    }

    
}