<?php include("IPerson.php"); ?>
<?php
	class person implements IPerson {
		var $name;
        var $age;

		function set_name($new_name) {
			$this->name = $new_name;
 		}

   		function get_name() {
			return $this->name;
		}

        function setAge($p_age) {
            $this->age = $p_age;
        }

        function getAge() {
            return $this->age;
        }
	}
?>
