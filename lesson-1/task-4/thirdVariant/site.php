<?php
$heading = 'Информация обо мне';
$year = 2020;

$content = file_get_contents("./site.html");
$content = str_replace("{{ h1 }}", $heading, $content);
$content = str_replace("{{ year }}", $year, $content);

echo $content;