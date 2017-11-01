<?php
class Student
{
    public $name;
    private $age;

    function Student($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function toString()
    {
        return $this->name . " " . $this->age;
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Class example</title>
</head>
<body>
<h1>Class example</h1>
<?php
$student1 = new Student("Peter", 24);
echo $student1->toString();
?>
</body>
</html>
