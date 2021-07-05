<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Play facebook video in iframe dynamically</title>
</head>
<body>
<h1 style="text-align: center">To run facebook video in iframe dynamicly We should filter the link url as like</h1>
<?php
$prefix = 'https://www.facebook.com/plugins/video.php?height=314&href=';
$safix = '&show_text=false&width=560&t=0';
$request_video_url = 'https://www.facebook.com/DailyProthomAlo/videos/3544996325603356';
$input_video = str_replace([':','/','?sfnsn=wa'],['%3A','%2F',''],$request_video_url);
$input_video = str_replace('/','%2F',$input_video);
$input_video = str_replace('?sfnsn=wa','',$input_video);
$video = $prefix.$input_video.$safix;

echo '<iframe src="'.$video.'" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>'
?>
</body>
</html>

