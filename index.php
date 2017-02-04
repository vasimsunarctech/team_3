<?php 
abstract class parentTest
{
	abstract protected function f1();
	abstract public function f2();
	//abstract private function f3(); //this will trhow error
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