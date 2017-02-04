<?php 
abstract class parentTest
{
	abstract protected function f1();
	abstract public function f2();
	//abstract private function f3(); //this will trhow error
}



abstract class TeamD
{
    public $name;
    public $age;
    
    public function Describe()
    {
        return $this->name . ", " . $this->age . " years old";    
    }
    
    abstract public function Greet();
}


class Team3 extends TeamD
{
    public function Greet()
    {
        return "Woof!";    
    }
    
    public function Describe()
    {
        return parent::Describe() . ", and I'm a!";    
    }
}

class childTest
{
	public function f1()
	{
		//body of your function
	}
	public function f2()
	{
		//body of your function
	}
	protected function f3()
	{
		//body of your function
	}
}

$a = new childTest();

?>