<?php


$data = file_get_contents("https://www.youtube.com/get_video_info?video_id=bMZo3SBrLUU");


parse_str($data);
$arr = explode(",", $url_encoded_fmt_stream_map);

foreach ($arr as $item) {
	parse_str($item, $vdata);
	echo '<pre>';
	print_r($vdata);
	
	echo '<a href="'.$vdata['url'].'" download >'.$vdata['quality'].'</a>';
	//echo '<video src="'.$vdata['url'].'" controls="" width="50%"></video>';
}




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>

$(document).ready(function(){
	
});


</script>
</html>
