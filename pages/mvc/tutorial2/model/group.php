<?php
namespace mvc\tutorial2\model;
class Group extends ModelAbstract
{
	protected $users;
	protected $name;
	protected $accessLevel;
}	
	

















// MAGIC METHODS - NOT WORKING
	
	// call runs when ever a function can't be found in a class.
	// if you was to delete function getAddress() it will not give you an error
	// it will try and find it for you
	// if you did echo "has been called", it will call it echo it 
	// you need to put all the gets inside this function
	
	
	
	
	
	
	// GET NAME
	/*
	public function getName()
	{
		return "john smith</br>";
	}
	*/



/*
namespace mvc\killerphp\model;
class User
{

	// SETTERS & GETTERS
	
	protected $address;
	protected $firstName;
	protected $lastName;
	protected $email;
	
	
	
	public function __toString()
	{
		return "$this->firstName $this->lastName lives at $this->address";
	}
	
	
	public function setAddress($street, $postalCode, $state)
	{

		echo "got 3 params";
	}
	
	public function setAddress($address)
	{
		$this->address = $address;	
	}
*/	
	// if you was to comment this out is would echo what you have in the __call function
	/*
	public function getAddress()
	{	
		return $this->address;	
	}
	*/
/*
	public function __call($name, $args)
	{
		$methodPrefix = substr($name, 0, 3);   //The 0, 3 will return HEL from HELLOAddress();
		//echo $methodPrefix; //returns "get"
	
		//$methodProperty = substr($name, 4); // everything after the name and the 4th char.
		//echo $methodProperty;  //returns ddress   (note it will include all properties being called)
		
		//$methodProperty = substr($name, 3); // everything after the name and the 4th char.
		//echo $methodProperty;  //returns Address   (note it will include all properties being called)
		
		$methodProperty = substr($name, 3); // everything after the name and the 4th char.
		$methodProperty = strtolower($name[3]) .substr($name, 4);  // make the first letter lowercase 
		//echo $methodProperty;  //returns address
		
		
		// instead of calling 
		
		return $this->$methodProperty;   //returns 9 writtle walk
	}
*/
// MAGIC METHODS - NOT WORKING
	
	// call runs when ever a function can't be found in a class.
	// if you was to delete function getAddress() it will not give you an error
	// it will try and find it for you
	// if you did echo "has been called", it will call it echo it 
	// you need to put all the gets inside this function
	
	
	
	
	
	
	// GET NAME
	/*
	public function getName()
	{
		return "john smith</br>";
	}
	*/
