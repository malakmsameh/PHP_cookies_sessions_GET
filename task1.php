<?php
if (isset($_POST['color'])) {
	$bgColor = htmlspecialchars($_POST['color']);
	setcookie('color', $bgColor, time() + (86400 * 30), "/");
} 
elseif (isset($_COOKIE['color'])) {
	$bgColor = $_COOKIE['color'];
} 
else {
	$bgColor = "white";
}

echo "<style>body { background-color: " . $bgColor . "; font-family: sans-serif; padding: 40px; }</style>";

echo "<form method='POST'>";
echo "<label>Choose a color: </label>";
echo "<select name='color' id='color'>";

$colors = [
	'white' => 'White',
	'lightblue' => 'Blue',
	'lightgreen' => 'Green',
	'pink' => 'Pink'
];

foreach ($colors as $value => $label) {
	if ($bgColor === $value) {
		$selected = 'selected';
	} else {
		$selected = '';
	}
		
	echo "<option value='$value' $selected>$label</option>";
}

echo "</select> ";
echo "<input type='submit' value='Change Background'>";
echo "</form>";
?>