<?php
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);/* 호환성검사하는 명령어 */
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);/* 결과값은 받아야한다. */
    curl_setopt($ch, CURLOPT_HEADER, 0);/* 결과값은 받아야한다. */
    curl_setopt($ch, CURLOPT_URL, "https://www.chosun.com/arc/outboundfeeds/rss/category/sports/?outputType=xml");/* URL 주소 받아야한다. */
    $url_source=curl_exec($ch);
    curl_close($ch);

    echo $url_source; /* 화면에 뿌려주는 명령어 echo */
?>