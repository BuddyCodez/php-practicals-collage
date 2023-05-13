  <?php
  class person
  {
    protected $name;

    function set_name($name)
    {
      $this->name = $name;
    }
  }

  //child class inheriting Person class
  class Student extends Person
  {

    function say_hello()
    {
      echo "Hello $this->name, How is your study going on?";
    }
  }
  echo "<h1> Udit Vegad(216090307001)</h1>";
  $student1 = new Student();
  $student1->set_name("Udit");
  $student1->say_hello();

  ?>