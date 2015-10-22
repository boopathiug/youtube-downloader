<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Youtube Downloader :)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light|Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="container">

<h1>Instant Youtube Video Downloader :)</h1>

<form action="" method="GET">

	<input type="text" placeholder="Insert a link" name="video">
	<input type="submit" value="Get">
	
</form>

<?php

if(isset($_GET['video']))
{
	$video = $_GET['video'];
	if($video == '')
	{
		header('location: index.php');
	}

	$ex = explode('=', $video);
	$link = $ex[1];
	

	$data = file_get_contents("https://www.youtube.com/get_video_info?video_id=".$link);

	parse_str($data);

$arr = explode(",", $url_encoded_fmt_stream_map);
parse_str($arr[0]);
echo '<video src="'.$url.'" controls="" width="80%"></video>';

echo '<h2>Download</h2>';
echo $title;

// 720 p
$first = $arr[0];
parse_str($first, $fdata);
echo '<p>720p - <a href="'.$fdata['url'].'" download >Download</a></p> ';

// 480 p
$first = $arr[2];
parse_str($first, $fdata);
echo '<p>480p - <a href="'.$fdata['url'].'" download >Download</a></p> ';

// 360 p
$first = $arr[4];
parse_str($first, $fdata);
echo '<p>360p - <a href="'.$fdata['url'].'" download >Download</a></p> ';


/*
foreach ($arr as $item) {


	parse_str($item, $vdata);

	echo '<pre>';


	echo '<a href="'.$vdata['url'].'" download >'.$vdata['quality'].'</a>';



}
*/

}

?>

</div>

<div class="footer">
&copy; 2015 <a href="https://www.facebook.com/hackingcode" target="_blank">Boopathi</a>
</div>

</body>
</html>