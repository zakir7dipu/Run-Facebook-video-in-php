# Run-Facebook-video-in-php

<h1 style="text-align: center">To run facebook video in iframe dynamically We should filter the link url as like</h1>
<?php





$request_video_url = 'https://www.facebook.com/DailyProthomAlo/videos/3544996325603356';


$input_video = str_replace(':','%3A',$request_video_url);
$input_video = str_replace('/','%2F',$input_video);
$input_video = str_replace('?sfnsn=wa','',$input_video);


$prefix = 'https://www.facebook.com/plugins/video.php?height=314&href=';
$safix = '&show_text=false&width=560&t=0';


$video = $prefix.$input_video.$safix;


echo '<iframe src="'.$video.'" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>'
?>
