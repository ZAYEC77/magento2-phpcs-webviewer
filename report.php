<?php 

$file = 'cs_report.json';

if (isset($_GET['file'])) {
	$file = $_GET['file'];
}

$data = file_get_contents($file);

$data = json_decode($data, true);

$filtered = [];

ob_start();

$count = 0;

echo '<pre>';
print_r($data['totals']);
echo '</pre>';

foreach ($data['files'] as $fileKey => $file) {

	$messages = array_filter($file['messages'], function($msg){
		return $msg['severity'] >= 10;
	});

	$msgCount = count($messages);

	$count += $msgCount;

	if ($msgCount == 0) {
		continue;
	}
	echo "<h3>$fileKey</h3>";

	echo '<pre>';

	print_r($messages);

	echo '</pre>';
}

$content = ob_get_contents();

ob_end_clean();

echo "<h1>Total errors count: $count</h1>";

echo $content;
