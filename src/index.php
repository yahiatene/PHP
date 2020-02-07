<?php include("Person.php"); ?>

<?php
	namespace Index;
	$jules = new person();
	$bob = new person();

    $jules->set_name("Jules Dici");
    $bob->set_name("Bob Delabas");

    $jules->setAge(25);
    $bob->setAge(30);

    echo "Jules's full name: " . $jules->get_name();
    echo "Bob's full name: " . $bob->get_name();

    echo "Jules's age: " . $jules->getAge();
    echo "Bob's age: " . $bob->getAge();
?>
