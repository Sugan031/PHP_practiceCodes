<?php
    $url_name = "https://google.com";

    $ch_session = curl_init();
  
  curl_setopt($ch_session, CURLOPT_RETURNTRANSFER, 1);
  
    curl_setopt($ch_session, CURLOPT_URL, $url);
  
    $result_url = curl_exec($ch_session);
  
    echo $result_url;
?>