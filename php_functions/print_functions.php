<?php
if (!function_exists('pretty_print_array')) {
	function pretty_print_array($arr, $indent = 0) {
		if (!is_array($arr)) {
			echo "NOT AN ARRAY";
			return;
		}
		
		foreach ($arr as $key => $value) {
			if (!is_array($value)) {
				echo str_repeat("&nbsp;", $indent) . "<b>$key</b> = $value <br>";
			} else {
				echo str_repeat("&nbsp;", $indent) . "<b>$key = {</b><br>";
				pretty_print_array($value, $indent + 4);
				echo str_repeat("&nbsp;", $indent) . "<b>}</b><br>";
			}
		}
	}
}
?>