<?php
if (!isset($_COOKIE['visit_count'])) {
	$visits = 1;
} else {
	$visits = $_COOKIE['visit_count'] + 1;
}

setcookie('visit_count', $visits);

echo "<h1>Visit Counter</h1>";
echo "number of visits : $visits";
?>