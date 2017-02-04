<?php echo "this is git training for team 3"; ?>
<?php echo "this is git training for onestop"; ?>
<?php if($workingfine)
{
	echo "This is working fine";
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
?>