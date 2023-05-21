<?php
class Department {
  // Properties
  public $dpt;

  // Methods
  function set_name($dpt) {
    $this->name = $dpt;
  }
  function get_name() {
    return $this->name;
  }
}

$CSE = new Department();
$Mechanical = new Department();
$CSE->set_name('CSE');
$Mechanical->set_name('Mechanical');

echo $CSE->get_name();
echo "<br>";
echo $Mechanical->get_name();
?>
