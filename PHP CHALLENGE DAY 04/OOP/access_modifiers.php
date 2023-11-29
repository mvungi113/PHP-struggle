<?php
 class access_modifiers{
    public $name;
    protected $color;
    private $weight;

    // function set_name($n) {  // a public function (default)
    //     $this->name = $n;
    //   }
    //   protected function set_color($n) { // a protected function
    //     $this->color = $n;
    //   }
    //   private function set_weight($n) { // a private function
    //     $this->weight = $n;
    //   }
    function __construct($name , $color, $weight)
    {
        $this -> name = $name;
        $this -> color = $color;
        $this -> weight = $weight;
    }
    function __destruct()
    {
        echo "Name {$this -> name} <br> Color {$this -> color} <br> Weight {$this -> weight}";
    }

 }

 $mango = new access_modifiers("Mango" ,"Yellow", "4.Kg");
// $mango = new access_modifiers();
// $mango->set_name('Mango'); // OK
// $mango->set_color('Yellow'); // ERROR
// $mango->set_weight('300'); // ERROR
?>