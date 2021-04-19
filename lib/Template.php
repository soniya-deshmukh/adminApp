
<?php 
class Template{
	// Path To Template
	protected $templa;
	// Vars Passed In
	protected $vars = array();
	// Constructor 
	public function __construct($templa){
		 $this->templa = $templa;
	}
	public function __set($key, $value){
	    $this->vars[$key] = $value;
	}
	public function __get($key){
	    return $this->vars[$key];
	}
	public function __toString(){ 
	    extract($this->vars); 
		chdir(dirname($this->templa));
		ob_start();
		include basename($this->templa);
		return ob_get_clean(); 
	}
}
?>