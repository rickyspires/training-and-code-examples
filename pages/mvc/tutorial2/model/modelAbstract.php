<?php
namespace mvc\tutorial2\model;

class ModelAbstract
{

	public function __call($name, $args)
	{
		$methodPrefix = substr($name, 0, 3);
		$methodProperty = strtolower($name[3]) .substr($name, 4); 
			
		
		switch($methodPrefix)
		{
			case "get":
			return $this->$methodProperty;
			break;
			
			
			case "set":
			//var_dump($args);
			if(count($args) == 1 )
				$this->$methodProperty = $args[0];
			else
				throw new \Exception("default setter supperts 1 argument");
			break;
			
			default:
			throw new \Exception("magic method doesn't support that prefix");
		}
		
		
	}



}