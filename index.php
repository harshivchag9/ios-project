<?php

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL , "https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=54ed1dcef0994aa5b1714a6e97728978");
  curl_setopt($ch, CURLOPT_POST , 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER , 1);
  $res = curl_exec($ch);
  echo $res;
  curl_close($ch);
?>
