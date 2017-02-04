
<?php
abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
}

<<<<<<< HEAD
class ConcreteClass1 extends AbstractClass
=======


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
>>>>>>> 06477614b6cc1e7a779f70230a9586bb3277a3ff
{
    protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}

<<<<<<< HEAD

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') ."\n";


?>
=======
$a = new childTest();

?>
>>>>>>> 06477614b6cc1e7a779f70230a9586bb3277a3ff
