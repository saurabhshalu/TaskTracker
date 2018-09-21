<?php
	function dateNice($datetimestamp)
	{
		return gmdate('M j Y h:i A', $datetimestamp+$_COOKIE['user-time']);
	}

	function timeNice($time)
	{
		$h = floor($time/3600);
		$m = round(($time - $h*3600)/60);
		return ($h . ' hrs : ' . $m . ' mins');
	}

	function save($data)
	{
		$json = json_encode($data);
		$file = fopen("data.json", 'w');
		fwrite($file, $json);
		fclose($file);
	}
?>