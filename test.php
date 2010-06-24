<?php include dirname(dirname(dirname(__FILE__))).'/engine/start.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<title>Google Embed API Examples</title>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	</head>
	<body>
		<?php 
			echo elgg_view('google/video', array(
				'height' => 326, 
				'width' => 400, 
				'docid' => '-1869256595351755411',
				'fullscreen' => FALSE,
			));
			
			echo elgg_view('google/wave', array(
				'waveid' => 'googlewave.com!w+Ism0RMW_A',
			));
		?>
	</body>
</html>