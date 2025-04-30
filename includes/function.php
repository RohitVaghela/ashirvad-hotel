<?php
function limit_text($text, $limit)
{
	preg_match_all("/&(.*)\;/U", $text, $pat_array);
	$additional = 0;

	foreach ($pat_array[0] as $key => $value) {
		if ($key < $limit) {
			$additional += (strlen($value) - 1);
		}
	}
	$limit += $additional;

	if (strlen($text) > $limit) {
		$text = substr($text, 0, $limit);
		$text = substr($text, 0, - (strlen(strrchr($text, ' '))));
	}
	return $text;
}
?>