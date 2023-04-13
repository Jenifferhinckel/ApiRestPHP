<?php

    $url = 'http://localhost/ProjetosJ/ApiRestPHP/public_html/api';

    $class = '/user';
    $param = '';

    $response = file_get_contents($url.$class.$param);

    echo $response;